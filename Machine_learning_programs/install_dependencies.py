import subprocess

# List of packages to install
packages = [
    "pip==23.2.1",
    "pandas==2.0.2",
    "numpy==1.22.3",
    "tqdm==4.65.0",
    "wheel==0.40.0",
    "setuptools==68.0.0",
    "spacy==3.5.3",
    "nltk==3.8.1",
    "gensim==4.3.1",
    "scikit-learn==1.3.0",
    "openai==0.27.8",
    "torch==2.0.1",
    "rank_bm25==0.2.2",
    "mysql-connector==8.1.0"
]

# Install packages
for package in packages:
    subprocess.check_call(['pip', 'install', package])

# Download spaCy model
subprocess.check_call(['python', '-m', 'spacy', 'download', 'es_core_news_md'])

