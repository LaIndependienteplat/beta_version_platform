#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Wed Aug  9 13:06:23 2023

@author: albert_nava
"""

import argparse
import json
import pandas as pd
import numpy as np
from sklearn.cluster import KMeans
import pickle
import Functions_
from rank_bm25 import BM25Okapi
import DateTime

from mysql.connector import Error

import warnings
warnings.filterwarnings("ignore")


def search_chat(question):
    # Loading TF-IDF Vectorizer and SVM to predict class of question
    Tfidf_vect = pickle.load(open('Tfidf_vect_fitted_nwclas.pkl', 'rb'))
    SVM = pickle.load(open('svm_trained_model_nwclas.sav', 'rb'))

    # Example usage TextCleaner
    text_cleaner = Functions_.TextCleaner()
    #question = input('¡Hola!\n ¿Puedo ayudarte em algo?\n')
    cleaned_data = text_cleaner.clean_text(question)
    text_cleaner.min_words = 2
    text_tokenized = text_cleaner.tokenizer(cleaned_data)
    #print(text_tokenized)
    text_tokenized_processede_vectorized = Tfidf_vect.transform(text_tokenized)

    prediction_SVM_tok = SVM.predict(text_tokenized_processede_vectorized)
    #pre_best = min([p[0] for p in statistics._counts(prediction_SVM_tok)]) # This line give an error in python 3.8
    pre_best =np.bincount(prediction_SVM_tok).argmax()
    #print("Categoría de la pregunta es: ", pre_best)
    if pre_best == 1:
        db = Functions_.conn_database('localhost', "u885670475_admin_indepent", 'rF9LWt[ZO^K[', "u885670475_laindependient")
        mycursor = db.cursor()

        query = ("SELECT users.id, users.username, users.name, users.nationality, GROUP_CONCAT(DISTINCT user_soft_skills.skill) AS softskills,"
            "GROUP_CONCAT(DISTINCT user_technical_skills.skill) AS techskills,"
            " GROUP_CONCAT(DISTINCT user_crowd_work_platforms.platform) AS platforms "
            " FROM users INNER JOIN user_soft_skills ON users.id = user_soft_skills.userId "
            "INNER JOIN user_technical_skills ON users.id = user_technical_skills.userId "
            " INNER JOIN user_crowd_work_platforms ON users.id = user_crowd_work_platforms.userId "	
            " GROUP BY users.id, users.name, users.nationality;")

        df_orig = pd.read_sql(query, db)
        #print("Tamaño de la información", df_orig.shape)

        db.close()
        mycursor.close()

        minnum_rows_users = 10
        columnsexcl= ['id', 'username', 'name']
        model = Functions_.ClusteringModel()
        if len(df_orig.index) >= minnum_rows_users:
            vect_dataframe, vectorizers = model.vectorize_dataframe(df_orig, columnsexcl)
            df_toclust = vect_dataframe.copy()
            df_toclust = vect_dataframe.drop(columns = ['id', 'username', 'name'], axis = 1 )

            kmeans_best = model.testclusters_model(df_toclust,3)
            kmeans_f = KMeans(n_clusters=kmeans_best,random_state=125,max_iter=100).fit(df_toclust)
            in_vectorized = model.vectorize_input(question, vectorizers)
            similar_results = model.calc_similarity(kmeans_f, in_vectorized, df_toclust, df_orig, 3, ['username', 'softskills', 'techskills', 'platforms'])
            #print("Pregunta :" + question)
            if not similar_results.empty:
                outmessage = "Las posibles usuarias con las características que solicitas son :"
                #print(outmessage)
                #print(similar_results)
                return question, similar_results.reset_index(drop=True), pre_best
            else:
                outmessage = "Lo siento, no hay alguna candidata con las características solicitadas"
                #print(outmessage)
                #print('DataFrame is empty!')
                return question, outmessage, pre_best
        else:
            outmessage = "Lo siento, no se tiene aún alguna candidata"
            #print(outmessage)
            return question, outmessage, pre_best
    elif pre_best == 2:
        # Connect to a database
        db = Functions_.conn_database('localhost', "u885670475_admin_indepent", 'rF9LWt[ZO^K[', "u885670475_laindependient")
        mycursor = db.cursor()
        query = "SELECT * FROM user_blog_posts"
        
        minnum_rows_post = 5
        df_orig = pd.read_sql(query, db)

        db.close()
        mycursor.close()

        if len(df_orig.index) >= minnum_rows_post:
        # Dataframe to work the process of embedding
            df_copy = df_orig.copy()
            cols_todrop = ['id', 'userId', '_created', 'platform_id'] # adding 'platform_id'
            df_copy.drop(columns = cols_todrop, axis= 1, inplace= True)
            #print(df_orig.head())

            df_copy_cleaned = text_cleaner.clean_sentences(df_copy, 'content')
            df_copy_cleaned.head()
            df_cleaned = df_copy_cleaned[['tok_lem_sentence']]
            df_cleaned.head()

            ##### --- Start the use of BM25 method to calculate best matches ---- ####
            df_cleaned.loc[:, 'text'] = df_cleaned['tok_lem_sentence'].apply(lambda row: ' '.join(row))
            text_list = df_cleaned['text'].tolist()
            bm25_model = BM25Okapi(text_list)
            

            cleaned_data = text_cleaner.clean_text(question)
            text_cleaner.min_words = 2
            text_tokenized = text_cleaner.tokenizer(cleaned_data)
            #print(text_tokenized)
            cleantok_query =  ' '.join(text_tokenized)
            bm25_scores = bm25_model.get_scores(cleantok_query)
            docs = bm25_model.get_top_n(cleantok_query, text_list, n=3)

            # bm25_scores = bm25_model.get_scores(query)
            # docs = bm25_model.get_top_n(query, text_list, n=5)
            df_search = df_cleaned[df_cleaned['text'].isin(docs)]
            df_search.head()
            original_indexes = df_search.index
            top_n_content = df_orig.loc[original_indexes]
            top_n_scores = [bm25_scores[index] for index in original_indexes]
            # Combine the original content and BM25 scores into a DataFrame for easier sorting
            top_n_results = pd.DataFrame({
                'topic': top_n_content['topic'],
                'content': top_n_content['content'],
                'BM25 Score': top_n_scores
            })

            # Sort the DataFrame by BM25 Score in descending order
            top_n_results_sorted = top_n_results.sort_values(by='BM25 Score', ascending=False)
            best_match = top_n_results_sorted[['topic', 'content']]
            best_match.reset_index(drop = True)
            list_match = best_match.values.tolist()
                        
            outmessage = "La siguiente información es lo más similar a lo solicitado"
            #print(outmessage)
            #print(list_match)

            return question, list_match, pre_best

        else:
            outmessage = "Lo siento, no se cuenta con la información solicitada"
            #print(outmessage)
            return question, outmessage, pre_best
    elif pre_best == 3:
        conversation = []
        conversation.append({'role': 'system', 'content': question})
        outmessage,conver  = Functions_.chatgpt_conversation(conversation, question) 
        #print(outmessage)
        return outmessage, conver, pre_best
    
    else:
        outmessage = "Lo siento, no se cuenta con la información solicitada"
        #print(outmessage)
        return question, outmessage, pre_best



# inserting data
def insert_db(results, userid):

    if userid is None:
    	user_id = 2 
    else:
    	user_id = userid
    	
    question = results["question"]
    answer = results["response"]
    #print(len(answer))
    answer_r = ""
    class_id = results["category"]
    
    if (type(answer)  == str):
        answer_r = answer.replace("\n","#")
    else:
        if class_id == "1":
            if len(answer) > 0:
                for person in answer:
                    #print(person)
 
                    try:
                        username = person['username']
                    except:
                        username = ""

                    try:
                        soft_skills = person['softskills']
                    except:
                        soft_skills = ""
                    try:
                        tech_skills = person['techskills']
                    except:
                        tech_skills= ""
                    try:
                        platforms = person['platforms'] 
                    except:
                        platforms = ""
     	    	    
                    answer_r += username + "#" + soft_skills + "#" +tech_skills + "#" + platforms + "|"

        else:
            for i in range(0,len(answer)):
                cont = 0
                for ele in answer[i]:
    	            if cont==1:
    	                answer_r += ele + "|"
    	            else:
    	                cont +=1

    class_id = results["category"]
    now = DateTime.DateTime().strftime("%d%m%Y%H%M%S")
    now_d = DateTime.DateTime().strftime('%Y-%m-%d %H:%M:%S')
    conv_id = str(user_id) + now
    
    #print('Reply: ',conv_id, user_id, now_d, class_id, question, answer_r)
    

    record = (conv_id, user_id, now_d, class_id, question, answer_r)
    
    try:

        db = Functions_.conn_database('localhost', "u885670475_admin_indepent", 'rF9LWt[ZO^K[', "u885670475_laindependient")
        mycursor = db.cursor()
        
        sql = """ INSERT INTO chat VALUES (%s, %s, %s, %s, %s, %s) """
        mycursor.execute(sql, record)
        db.commit()

        
    except Error as e:
        print(e)
        print("ERROR INSERTING RESULTS..")

    finally:
        db.close()
        mycursor.close()

def main(question):
    outmessage, response, question_category = search_chat(question)
    return outmessage, response, question_category

if __name__ == "__main__":
    parser = argparse.ArgumentParser(description="Chatbot Program")
    parser.add_argument("question", type=str, help="Input question for the chatbot")
    parser.add_argument("userid", type=str, help="user id")
    args = parser.parse_args()

    outmessage, response, question_category = main(args.question)
    
    if isinstance(response, pd.DataFrame):
        response_data = response.to_dict(orient="records")
    elif isinstance(response, list):
        response_data = response
    else:
        response_data = str(response)
    
    result = {"question": outmessage, "response": response_data, "category": str(question_category)}
    #print(type(response_data))
    json_result = json.dumps(result, indent=4, ensure_ascii=False)

    #print("Resultados: ")
    print(json_result)
    insert_db(result,args.userid)

