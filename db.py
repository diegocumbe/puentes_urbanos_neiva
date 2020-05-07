#enconding: utf-8
from pymongo import MongoClient

MONGO_URI = 'mongodb+srv://puentes:puentes@cluster0-35b2j.mongodb.net/test?retryWrites=true&w=majority'

client = MongoClient(MONGO_URI)

db = client['puentes']
collection = db['registro_de_puentes']
 
results = collection.find({"comuna":"9"})
for r in results:
    print(r)

