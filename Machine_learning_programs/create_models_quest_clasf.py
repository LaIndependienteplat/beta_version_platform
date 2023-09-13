import pickle
from sklearn.metrics import classification_report, confusion_matrix
from sklearn.model_selection import train_test_split
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.ensemble import RandomForestClassifier
from sklearn import model_selection, naive_bayes, svm
import time
import numpy as np
import pandas as pd
import Functions_

text_cleaner = Functions_.TextCleaner()

df_orig = pd.read_csv('your_file_with_questions_to_classify.csv')
print(df_orig.head())
print(df_orig.shape)
df_copy = df_orig.copy()

# Text processing
df_copy_cleaned = text_cleaner.clean_sentences(df_copy, 'Question')
df_copy_cleaned = df_copy_cleaned[df_copy_cleaned['tok_lem_sentence'].apply(lambda x: len(x) > 0)]

# Split the dataset
train_text, temp_text, y_train_labels, y_test_labels = train_test_split(df_copy_cleaned['tok_lem_sentence'], df_copy_cleaned['Category'], random_state=2018, test_size=0.3, stratify=df_copy_cleaned['Category'])

print(temp_text.shape)
print(train_text.shape)

df_to_fit = df_copy_cleaned['tok_lem_sentence'].apply(lambda x: ' '.join(x) if isinstance(x, list) else x)
train_text_fit = train_text.apply(lambda x: ' '.join(x) if isinstance(x, list) else x)
temp_text_fit = temp_text.apply(lambda x: ' '.join(x) if isinstance(x, list) else x)

Tfidf_vect = TfidfVectorizer(max_features=5000)
Tfidf_vect.fit(df_to_fit)
filename = 'Name_your_Tfidf_vect_model.pkl'
pickle.dump(Tfidf_vect, open(filename, 'wb'))
print("Vocabulary size", len(Tfidf_vect.vocabulary_))
vocabulary = Tfidf_vect.vocabulary_
Train_X_Tfidf = Tfidf_vect.transform(train_text_fit)
Test_X_Tfidf = Tfidf_vect.transform(temp_text_fit)


start = time.time()

flag_model = True # True for SVM False for RandomForest
flag_grid_random = True # True for Gridsearch False for Randomizedsearch
classif_model = Functions_.ClassificationModel()

if flag_model :
    print('Hyperarameter tunning with SVM')
    try:
        model = svm.SVC()
        if flag_grid_random:
            param_grid = { 'kernel': ['linear', 'rbf'] , 'gamma': [1, 0.1]}
            cv = 3
            parameters_svm =  classif_model.gridsearch_svm(model, param_grid, cv, Train_X_Tfidf, y_train_labels, Test_X_Tfidf, y_test_labels)
            flag_param = True
    except Exception as e:
        # Handle any exception that may occur during grid search
        print('Avoid tunning hyperparameter: \n')
        print("Error occurred during grid search:", str(e))

else:
    if not flag_model:
        print('Hyperarameter tunning with Random Forest')
        try:
            rfmodel = RandomForestClassifier()
            n_iter_ = 100
            cv_ = 3
            if flag_grid_random:
                random_grid = {
                    'n_estimators': [25, 50, 100, 150],
                    'max_features': ['sqrt', 'log2', None],
                    'max_depth': [3, 6, 9],
                    'max_leaf_nodes': [3, 6, 9],
                    }
                parameters_rf = classif_model.gridsearch_RFmodel(rfmodel, random_grid, cv_, Train_X_Tfidf, y_train_labels, Test_X_Tfidf, y_test_labels)
                flag_param = True
        except Exception as e:
           # Handle any exception that may occur during grid search
           print('Avoid tunning hyperparameter: \n')
           print("Error occurred during grid search:", str(e))

target_names = ['Usuarios', 'Blog', 'General', 'Inválido']
if flag_model:
    if flag_param:
        SVM = svm.SVC(**parameters_svm)    
        predictions_svm = classif_model.test_svm(Train_X_Tfidf, y_train_labels, Test_X_Tfidf, y_test_labels, target_names, SVM)
        filename = 'your_svm_trained_model.sav'
        pickle.dump(SVM, open(filename, 'wb'))
        print("Files saved to disk! Proceed to inference.py")
else:
    if flag_param:
        RFmodel = RandomForestClassifier(**parameters_rf)
        classif_model.test_rainforest(Train_X_Tfidf, y_train_labels, Test_X_Tfidf, y_test_labels, RFmodel, target_names)
        filename = 'your_randomF_trained_model.sav'
        pickle.dump(RFmodel, open(filename, 'wb'))
        print("Files saved to disk! Proceed to inference.py")
end = round(time.time()-start,2)
print("This process took",end,"seconds.")

#Get the predicted labels from the test_svm function
y_pred_labels = predictions_svm

#Compute the confusion matrix
cm = confusion_matrix(y_test_labels, y_pred_labels)

cm_normalized = cm.astype('float') / cm.sum(axis=1)[:, np.newaxis]