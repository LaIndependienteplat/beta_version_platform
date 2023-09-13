#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Thu Jul 13 12:50:33 2023

@author: albert_nava
"""
import  mysql.connector
import os
from tqdm import tqdm
import numpy as np
import pandas as pd
from collections import defaultdict
import re
import string 
import spacy
import nltk
from nltk import pos_tag
from nltk.corpus import wordnet as wn
from nltk.tokenize import word_tokenize
from nltk.stem import WordNetLemmatizer
from gensim.models.word2vec import Word2Vec
from gensim.models.keyedvectors import KeyedVectors
from sklearn.metrics.pairwise import cosine_similarity
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.cluster import KMeans
from sklearn.metrics import silhouette_score as ss
from sklearn.metrics.pairwise import pairwise_distances
from sklearn.metrics.pairwise import cosine_similarity
from sklearn.svm import SVC
from sklearn.ensemble import RandomForestClassifier
from sklearn.metrics import cohen_kappa_score, matthews_corrcoef, accuracy_score, recall_score, precision_score, classification_report
from sklearn.model_selection import GridSearchCV
import time
import claveinfo
import pickle

nlp = spacy.load("es_core_news_md") 
Stopwords = set(nlp.Defaults.stop_words)
# WordNetLemmatizer requires Pos tags to understand if the word is noun or verb or adjective etc. By default it is set to Noun
tag_map = defaultdict(lambda: wn.NOUN)

def conn_database(host_, user_, password_, database_name):
    """
    Connect to a MySQL database using the provided credentials.
    Args:
        host_ (str): The hostname or IP address of the MySQL server.
        user_ (str): The username to use for the database connection.
        password_ (str): The password associated with the username.
        database_name (str): The name of the database to connect to.

    Returns:
        mysql.connector.connection.MySQLConnection: A connection object representing the database connection.

    Raises:
        mysql.connector.Error: If there is an error in establishing the database connection.
    """
    try:
        # Create a connection to the MySQL database
        db = mysql.connector.connect(
            host=host_,
            user=user_,
            passwd=password_,
            database=database_name
        )

        # Return the database connection object
        return db

    except mysql.connector.Error as err:
        # Handle any errors that occur during the connection
        print(f"Error: {err}")
        raise err  # Re-raise the error to handle it at a higher level
    
def get_recommendations_tfidf(sentence, tfidf_mat, top_m, vectorizer):
    """
    Return the database sentences in order of highest cosine similarity relative to each 
    token of the target sentence. 
    
    Args:
        sentence (str): The target sentence for which recommendations are sought.
        tfidf_mat (scipy.sparse.csr_matrix): The TF-IDF matrix representing the dataset.
        top_m (int): The number of top recommendations to return.
        vectorizer: The TF-IDF vectorizer used to transform text into TF-IDF vectors.
        
    Returns:
        list: A list of indices representing the recommended database sentences.
    """
    # Embed the query sentence
    tokens_query = [str(tok) for tok in TextCleaner().tokenizer(sentence)]
    embed_query = vectorizer.transform(tokens_query)
    embed_mat = [nlp(sentence)]
    # Create list with similarity between query and dataset
    mat = cosine_similarity(embed_query, tfidf_mat)
    # Best cosine distance for each token independantly
    best_index = SpacyPredictor(nlp,embed_mat).extract_best_indices(mat, topk= top_m)
    
    return best_index

def text_preprocessing(text):
    """
    Preprocesses the input text by converting to lowercase, tokenizing, removing stop words,
    and lemmatizing words.
    Args:
        text (str): The input text to be preprocessed.
    Returns:
        str: A string containing the preprocessed words.
    """
    text = text.lower()
    text_words_list = word_tokenize(text)
    #print(text_words_list)
    Final_words = []
    # Initializing WordNetLemmatizer()
    word_Lemmatized = WordNetLemmatizer()
    # pos_tag function below will provide the 'tag' i.e if the word is Noun(N) or Verb(V) or something else.
    for word, tag in pos_tag(text_words_list):
        # Below condition is to check for Stop words and consider only alphabets
        if word not in Stopwords and word.isalpha():
            word_Final = word_Lemmatized.lemmatize(word, tag_map[tag[0]])
            Final_words.append(word_Final)
        # The final processed set of words for each iteration will be stored in 'text_final'
    return str(Final_words)


class TextCleaner:
    def __init__(self):
    # Initialize class attribute
        self.stopwords = Stopwords
        self.min_words = 3
        self.max_words = 200
        self.pattern_s = re.compile("\'s")
        self.pattern_rn = re.compile("\\r\\n")
        self.pattern_punc = re.compile(r"[^\w\s]")
        self.pattern_num = re.compile(r'\b(\d+)([a-zA-Z]+)\b')
    
    @property
    def min_words(self):
        return self._min_words
    
    @min_words.setter
    def min_words(self, value):
        # Setter method for min_words attribute
        self._min_words = value
        
    def clean_text(self, text):
        """
        Clean and preprocess the input text by performing various text cleaning operations.
        Args: text (str): The input text to be cleaned.
        Returns:
            str: The cleaned text.
        """
        text = text.lower()
        text = re.sub(self.pattern_s, ' ', text)
        text = re.sub(self.pattern_rn, ' ', text)
        text = re.sub(self.pattern_punc, ' ', text)
        text = re.sub(self.pattern_num, ' ', text)
        return text
    
    def tokenizer(self, sentence):
        """
        Tokenize and lemmatize the input sentence while applying various filtering conditions.
        Args:
            sentence (str): The input sentence to be tokenized and lemmatized.
        Returns:
            list: A list of tokens after tokenization and lemmatization.
        """
        stemmer = WordNetLemmatizer()
        tokens = [stemmer.lemmatize(w) for w in word_tokenize(sentence)]
        token = [w for w in tokens if (len(w) > self.min_words and len(w) < self.max_words and w not in self.stopwords)]
        return token
    
    def clean_sentences(self, var, colname):
        """
        Clean and preprocess sentences in a pandas Series or DataFrame.
        Args:
            var (pd.Series or pd.DataFrame): The input data containing sentences.
            colname (str): The name of the column containing the sentences.
        Returns:
            pd.DataFrame: A DataFrame containing cleaned sentences and tokenized/lemmatized sentences.
        """
        if isinstance(var, pd.Series):
            df = var.to_frame()
            print("Converted to DataFrame")
        elif isinstance(var, pd.DataFrame):
            df = var.copy()
        else:
            raise ValueError("Invalid input type. Expected pandas Series or DataFrame.")
        
        print('Cleaning sentences...')
        df['clean_sentence'] = df[colname].apply(self.clean_text)
        df['tok_lem_sentence'] = df['clean_sentence'].apply(self.tokenizer)
        return df

class SpacyPredictor:
    def __init__(self, model, embed_mat):
        self.model = model
        self.embed_mat = embed_mat
    
    @staticmethod
    def extract_best_indices(m, topk, mask=None):
        if len(m.shape) > 1:
            cos_sim = np.mean(m, axis=0)
        else:
            cos_sim = m
        index = np.argsort(cos_sim)[::-1]  # from highest idx to smallest score
        if mask is not None:
            assert mask.shape == m.shape
            mask = mask[index]
        else:
            mask = np.ones(len(cos_sim))
        mask = np.logical_or(cos_sim[index] != 0, mask)  # eliminate 0 cosine distance
        best_index = index[mask][:topk]
        return best_index
    
    def predict_spacy(self, query_sentence, topk=5):
        query_embed = self.model(query_sentence)
        mat = np.array([query_embed.similarity(line) for line in self.embed_mat])
        mat_mask = np.array([True if line.vector_norm else False for line in self.embed_mat])
        best_index = self.extract_best_indices(mat, topk=topk, mask=mat_mask)
        return best_index

class Word2VecPredictor:
    def __init__(self, model):
        """
        Initialize the Word2VecPredictor with a Word2Vec model.
        Args:
            model (Word2Vec): The Word2Vec model to use for word embeddings.
        """
        assert isinstance(model, Word2Vec)
        self.model = model
    
    @staticmethod
    def extract_best_indices(m, topk, mask=None):
        """
        Extract the indices of the top-k elements with the highest values from an array.
        Args:
            m (np.ndarray): The input array.
            topk (int): The number of top indices to extract.
            mask (np.ndarray, optional): An optional mask to apply.
        Returns:
            np.ndarray: An array of the top-k indices.
        """
        if len(m.shape) > 1:
            cos_sim = np.mean(m, axis=0)
        else:
            cos_sim = m
        index = np.argsort(cos_sim)[::-1]  # from highest idx to smallest score
        if mask is not None:
            assert mask.shape == m.shape
            mask = mask[index]
        else:
            mask = np.ones(len(cos_sim))
        mask = np.logical_or(cos_sim[index] != 0, mask)  # eliminate 0 cosine distance
        best_index = index[mask][:topk]
        return best_index
    
    @staticmethod
    def is_word_in_model(word, model):
        """
        Check if a word is in the Word2Vec model's vocabulary.
        Args:
            word (str): The word to check.
            model (KeyedVectors): The Word2Vec model's KeyedVectors.
        Returns:
            bool: True if the word is in the model's vocabulary, otherwise False.
        """
        assert isinstance(model, KeyedVectors)
        is_in_vocab = word in model.key_to_index.keys()
        return is_in_vocab
    
    def predict_w2v(self, query_sentence, dataset, topk=3):
        """
        Predict the top-k sentences from a dataset based on word similarity.
        Args:
            query_sentence (str): The query sentence to find similar sentences for.
            dataset (list): A list of sentences to compare against.
            topk (int, optional): The number of top similar sentences to return.
        Returns:
            list: A list of indices representing the top-k similar sentences in the dataset.
        """
        query_sentence = query_sentence.split()
        in_vocab_list, best_index = [], [0]*topk
        for w in query_sentence:
            if self.is_word_in_model(w, self.model.wv):
                in_vocab_list.append(w)
        if len(in_vocab_list) > 0:
            sim_mat = np.zeros(len(dataset))
            for i, data_sentence in enumerate(dataset):
                if data_sentence:
                    sim_sentence = self.model.wv.n_similarity(in_vocab_list, data_sentence)
                else:
                    sim_sentence = 0
                sim_mat[i] = np.array(sim_sentence)
            best_index = self.extract_best_indices(sim_mat, topk=topk)
        return best_index

class ClusteringModel:
    def vectorize_dataframe(self, main_df, columns_ex):
        """
        Vectorize a DataFrame by applying TF-IDF vectorization to specified columns.
        Args:
            main_df (pd.DataFrame): The DataFrame to be vectorized.
            columns_ex (list): Columns to exclude from vectorization.
        Returns:
            pd.DataFrame: The vectorized DataFrame.
            list: List of vectorizers used for each column.
        """
        vectorizers = []
        vectorized_df = pd.DataFrame()
        for column in main_df.columns:
            if column not in columns_ex:
                vectorizer = TfidfVectorizer()
                vectorized_data = vectorizer.fit_transform(main_df[column])
                vectorized_data_df = pd.DataFrame(vectorized_data.toarray(), columns=vectorizer.get_feature_names_out())
                vectorized_df = pd.concat([vectorized_df, vectorized_data_df], axis=1)
                vectorizers.append(vectorizer)
            else:
                vectorized_df[column] = main_df[column]
        return vectorized_df, vectorizers

    def testclusters_model(self, df_clust, lim_sup):
        """
        Test different numbers of clusters to find the optimal number using K-Means.
        Args:
            df_clust (pd.DataFrame): The data for clustering.
            lim_sup (int): The upper limit for the number of clusters to test.
        Returns:
            int: The optimal number of clusters.
        """
        k1 = []
        inertia_s1 = []
        sscore1 = []
        best_n_clusters = None
        best_silhouette_score = -1
        for i in tqdm(range(2, lim_sup)):
            k1.append(i)
            kmeans1 = KMeans(n_clusters=i, random_state=125, max_iter=100).fit(df_clust)
            inertia_s1.append(kmeans1.inertia_)
            sscore1.append(ss(df_clust, kmeans1.labels_))
            if sscore1[-1] > best_silhouette_score:
                best_silhouette_score = sscore1[-1]
                best_n_clusters = i
    
        return best_n_clusters

    def centroids_model(self, kmeans, vectorizers):
        """
        Print the centroids of clusters along with their feature names.
        Args:
            kmeans (KMeans): The trained K-Means clustering model.
            vectorizers (list): List of vectorizers used for each cluster.
        """
        centroids = kmeans.cluster_centers_
        for i, centroid in enumerate(centroids):
            vectorizer = vectorizers[i]
            print(f"Centroid {i+1}:")
            feature_names = vectorizer.get_feature_names()
            print(feature_names)
            for feature_idx, weight in zip(centroid.argsort()[::-1], centroid[centroid.argsort()[::-1]]):
                if feature_idx < len(feature_names):
                    print(f"{feature_names[feature_idx]}: {weight}")

    def vectorize_input(self, str_input, vectorizers):
        """
        Vectorize an input string using the provided vectorizers.
        Args:
            str_input (str): The input string to vectorize.
            vectorizers (list): List of vectorizers used for each cluster.
        Returns:
            pd.DataFrame: The vectorized input as a DataFrame.
        """
        input_vectorized = pd.DataFrame()
        for i, vectorizer in enumerate(vectorizers):
            vectorized_data = vectorizer.transform([str_input])
            vectorized_data_df = pd.DataFrame(vectorized_data.toarray(), columns=vectorizer.get_feature_names_out())
            input_vectorized = pd.concat([input_vectorized, vectorized_data_df], axis=1)
        return input_vectorized

    def calc_similarity(self, kmeans, input_vectorized, vectorized_df, orig_df, number_users, list_cols):
        """
        Calculate similarity between input and data cluster and return top similar individuals.
        Args:
            kmeans (KMeans): The trained K-Means clustering model.
            input_vectorized (pd.DataFrame): Vectorized input data.
            vectorized_df (pd.DataFrame): Vectorized data used for clustering.
            orig_df (pd.DataFrame): Original data with individual details.
            number_users (int): Number of similar individuals to return.
            list_cols (list): List of columns to return for similar individuals.
        Returns:
            pd.DataFrame: DataFrame containing the top similar individuals.
        """
        input_cluster = kmeans.predict(input_vectorized)[0]
        cluster_indices = vectorized_df[kmeans.labels_ == input_cluster].index
        input_array = input_vectorized.values
        cluster_array = vectorized_df.loc[cluster_indices].values
        
        if np.all(input_array == 0):
            return pd.DataFrame()
        
        distances_3 = pairwise_distances(input_array, cluster_array, metric='jaccard')
        distances = pairwise_distances(input_vectorized, vectorized_df.loc[cluster_indices], metric='minkowski')
        similarities = cosine_similarity(input_vectorized, vectorized_df.loc[cluster_indices]).flatten()
        distances_3_norm = (distances_3 - distances_3.min()) / (distances_3.max() - distances_3.min())
        distances_norm = (distances - distances.min()) / (distances.max() - distances.min())
        similarities_norm = (similarities - similarities.min()) / (similarities.max() - similarities.min())
        similarity_weight = 0.4
        distance_weight = 0.3
        jaccard_weight = 0.3
        combined_score = (
            similarity_weight * similarities_norm +
            distance_weight * distances_norm +
            jaccard_weight * distances_3_norm)
        sorted_indices = np.argsort(combined_score)
        top_indices = sorted_indices[0][:number_users]
        indices_flat = cluster_indices[top_indices].to_list()
        similar_individuals = orig_df.loc[indices_flat, list_cols]
        return similar_individuals

    def save_kmeans_model(self, kmeans, path):
        """
        Save the K-Means clustering model to a file.
        Args:
            kmeans (KMeans): The trained K-Means clustering model.
            path (str): The path to save the model file.
        """
        with open(path, 'wb') as file:
            pickle.dump(kmeans, file)

    def load_kmeans_model(self, path):
        """
        Load a K-Means clustering model from a file.
        Args: 
            path (str): The path to the saved model file.
        Returns:
            KMeans: The loaded K-Means clustering model.
        """
        with open(path, 'rb') as fid:
            model = pickle.load(fid)
        return model

class ClassificationModel:
    def test_svm(self, x_train, y_train, x_test, y_test, labels, SVM):
        """
        Train and evaluate a Support Vector Machine (SVM) classifier.
        Args:
            x_train (numpy.ndarray): Training feature data.
            y_train (numpy.ndarray): Training target labels.
            x_test (numpy.ndarray): Testing feature data.
            y_test (numpy.ndarray): Testing target labels.
            labels (list): List of class labels.
            SVM (SVC): The SVM classifier to use.
        Returns:
            Predictions based on the model used
        """
        SVM.fit(x_train, y_train)
        n_features_used = SVM.fit(x_train, y_train).n_features_in_
        print("Number of features used in the model:", n_features_used)
        predictions_SVM = SVM.predict(x_test)
        coef_cohen = cohen_kappa_score(y_test, predictions_SVM)
        coef_matthews = matthews_corrcoef(y_test, predictions_SVM)
        print("SVM Cohen coeficient -> ",coef_cohen*100)
        print("SVM Matthews coeficient -> ",coef_matthews*100)
        print("SVM Accuracy Score -> ", accuracy_score(predictions_SVM, y_test) * 100)
        print("SVM Recall Score -> ", recall_score(predictions_SVM, y_test, average='weighted') * 100)
        print("SVM Precision Score -> ", precision_score(predictions_SVM, y_test, average='weighted', zero_division='warn') * 100)
        print(classification_report(y_test, predictions_SVM, target_names=labels))

        return predictions_SVM

    def test_random_forest(self, x_train, y_train, x_test, y_test, RFmodel, labels):
        """
        Train and evaluate a Random Forest classifier.
        Args:
            x_train (numpy.ndarray): Training feature data.
            y_train (numpy.ndarray): Training target labels.
            x_test (numpy.ndarray): Testing feature data.
            y_test (numpy.ndarray): Testing target labels.
            RFmodel (RandomForestClassifier): The Random Forest classifier to use.
            labels (list): List of class labels.
        Returns:
            Predictions based on the model used
        """
        RFmodel = RandomForestClassifier()
        RFmodel.fit(x_train, y_train)
        pred_RandomF = RFmodel.predict(x_test)
        coef_cohen = cohen_kappa_score(y_test, pred_RandomF)
        coef_matthews = matthews_corrcoef(y_test, pred_RandomF)
        print("RandomForest Cohen coeficient -> ",coef_cohen*100)
        print("RandomForest Matthews coeficient -> ",coef_matthews*100)
        print("RandomForest Accuracy Score -> ", accuracy_score(pred_RandomF, y_test) * 100)
        print("RandomForest Recall Score -> ", recall_score(pred_RandomF, y_test, average='weighted') * 100)
        print("RandomForest Precision Score -> ", precision_score(pred_RandomF, y_test, average='weighted') * 100)
        print(classification_report(y_test, pred_RandomF, target_names=labels))

        return pred_RandomF

    def gridsearch_svm(self, svm_model, param_grid_, cv_, x_train, y_train, x_test, y_test):
        """
        Perform a grid search for hyperparameter tuning of an SVM classifier.
        Args:
            svm_model (SVC): The SVM classifier.
            param_grid_ (dict): Dictionary of hyperparameters and their possible values.
            cv_ (int): Number of cross-validation folds.
            x_train (numpy.ndarray): Training feature data.
            y_train (numpy.ndarray): Training target labels.
            x_test (numpy.ndarray): Testing feature data.
            y_test (numpy.ndarray): Testing target labels.
        Returns:
            dict: Best hyperparameters found during the grid search.
        """
        start = time.time()
        grid_search = GridSearchCV(svm_model, param_grid_, cv=cv_, verbose=5)
        grid_result = grid_search.fit(x_train, y_train)
        print(f'The best accuracy score for the training dataset is {grid_result.best_score_:.4f}')
        print(f'The best hyperparameters are {grid_result.best_params_}')
        print(f'The accuracy score for the testing dataset is {grid_search.score(x_test, y_test):.4f}')
        end = round(time.time() - start, 2)
        print("This process took", end, "seconds.")
        best_params = grid_search.best_params_
        return best_params

    def gridsearch_random_forest(self, rfmodel, random_grid, cv_, x_train, y_train, x_test, y_test):
        """
        Perform a grid search for hyperparameter tuning of a Random Forest classifier.
        Args:
            rfmodel (RandomForestClassifier): The Random Forest classifier.
            random_grid (dict): Dictionary of hyperparameters and their possible values.
            cv_ (int): Number of cross-validation folds.
            x_train (numpy.ndarray): Training feature data.
            y_train (numpy.ndarray): Training target labels.
            x_test (numpy.ndarray): Testing feature data.
            y_test (numpy.ndarray): Testing target labels.
        Returns:
            dict: Best hyperparameters found during the grid search.
        """
        start = time.time()
        rf_random = GridSearchCV(estimator=rfmodel, param_grid=random_grid, cv=cv_, verbose=5, n_jobs=-1)
        rf_random.fit(x_train, y_train)
        print(f'The best accuracy score for the training dataset is {rf_random.best_score_:.4f}')
        print(f'The best hyperparameters are {rf_random.best_params_}')
        print(f'The accuracy score for the testing dataset is {rf_random.score(x_test, y_test):.4f}')
        end = round(time.time() - start, 2)
        print("This process took", end, "seconds.")
        best_params = rf_random.best_params_
        return best_params

###### ------ OpenAI API ------########
import openai
API_KEY = claveinfo.clave # File with your API-key
openai.api_key = API_KEY

model_id = 'gpt-3.5-turbo'

def chatgpt_conversation(conversation, user_question):
    # Convert the conversation into a format accepted by the OpenAI Chat API
    messages = [{"role": msg['role'], "content": msg['content']} for msg in conversation]

    # Use the OpenAI ChatCompletion API to generate a response
    response = openai.ChatCompletion.create(
        model=model_id,     # Specify the model ID to use
        max_tokens = 1024,  # Limit the response to a maximum number of tokens
        messages=messages   # Pass the conversation messages to the API
    )
    # Get information about API usage
    api_usage = response['usage']
    print("Total token consumed: {0}".format(api_usage['total_tokens']))
    # Check if the response is complete or not
    print(response['choices'][0].finish_reason)
    # Get the index of the response (if multiple completions are returned)
    print(response['choices'][0].index)
    # Extract the generated response text
    response_text = response['choices'][0].message['content']
    # Add user query to the conversation
    conversation.append({'role': 'user', 'content': user_question})
    # Add generated response to the conversation      
    conversation.append({'role': 'assistant', 'content': response_text})  

    # Return both the user's question and the generated response
    return user_question, response_text
