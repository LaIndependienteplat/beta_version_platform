The following packages are necessary for the functionality of the assistant agent:

  * Mysql-connector
  * Pandas 
  * Numpy 
  * Tqdm 
  * Wheel Setuptools.
  * Spacy. 
  * Nltk. 
  * Gensim.
  * Scikit-learn.
  * OpenAI
  * Torch 
  * Rank_BM25 

Additionally, because the Spanish language is the base for the platform, it is necessary to download some dependencies for Spacy packages.
* python -m spacy download es_core_news_md 
* python -m spacy download es_core_news_sm 


### Python programs

* **‘Functions_.py’**: This script has all classes and functions to manage the functions of the assistant agent. The classes are the following:

  * **TextCleaner**: contains the functions that allow to perform a preprocessing of everything that is considered text to be analyzed, most of the functions are focused on working with data that come from Pandas objects known as dataframes.
  * **SpacyPredictor**: contains the functions to perform the process of calculating the similarity between the information about the blog and a query or a requisition about any topic, this class focuses on the use of the Spacy package.
  * **Word2VecPredictor**: This class uses the package Gensim and with the help of some functions predicts the most similar contents between a query input and all information about a user profile table. 
  * **ClusteringModel**: This class is used for the process of obtaining the most similar ues_core_news_smsers to the requested characteristics, it can be used if there are already a certain number of users and thus be able to obtain some result. If you do not have the number of users indicated in this class, it will not be possible to perform the process of most of the functions.
  * **ClassificationModel**: This class contains some functions that can be used to make a question classification model, the methods to generate the parameters of the model are based on a Support vector machine and Random forest, just one of them can be used to make and test the question classification model. When making the model, this will be saved in a file to use when it is needed.

The script also contains some extra functions that can be used to process single text and get similarity between a query and text information recorded in a database, there is a specific function to connect and extract the information of a Mysql database.

Finally, the script has the function to use OpenAPI, as it is well known that to use some features of this API it is mandatory to have an API key that is not included in the files.

**‘chat_function.py’**: This script has defined a function called search_chat that makes use of some classes and functions from the script Functions_.py. An important point to consider in using this script is having a question classification model and tokenizer model, these models are related to the information handled during the process to obtain an answer from the assistant agent. Another point when using the script consists of indicating the parameters for using the information in a MySQL database.

There is an example script where the training and recording of the models are made, the name of the script is 'create_models_quest_clasf.py'. To use this script it is necessary to have a csv file with all the questions and the category for each question, in our case the column names are "Question" and "Category", for this last one the format is integer. It is possible to generate a support vector machine model or a random forest model

## Examples using the assistant agent Python programs 
### Question about general knowledge
![example_chat_terminal_1](https://github.com/LaIndependienteplat/beta_version_platform/assets/144864511/7e5d4e22-591a-4d28-9a2f-60528134a58b)

### Question about user profile
![example_chat_terminal_2](https://github.com/LaIndependienteplat/beta_version_platform/assets/144864511/4757fd03-ae12-4158-b189-16fc4179b10d)
