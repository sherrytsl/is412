from pymongo import MongoClient
from pprint import pprint # pprint library is used to make the output look more pretty
from random import randint

# connect to MongoDB, change the << MONGODB URL >> to reflect your own connection string
client = MongoClient('localhost', 27017)
db=client["EBS-test"]
#Step 2: Create sample data
data = [{
"eid": 1,
"firstName": "Kare En",
"lastName": "Lim",
"age": 59,
"assignedZone": [1, 2, 3],
"employeeType": "Cleaner",
"password": "karen123"
},
{
"eid": 2,
"firstName": "Sha Ren",
"lastName": "Tan",
"age": 62,
"assignedZone": [4, 5],
"employeeType": "Cleaner",
"password": "sharon123"
},
{
"eid": 3,
"firstName": "Kwok Hao",
"lastName": "Wong",
"age": 40,
"employeeType": "Supervisor",
"password": "guohao123"
}]
# pprint(data)
for x in range(len(data)):
    #Step 3: Insert business object directly into MongoDB via isnert_one
    result=db["Employee"].insert_one(data[x])
    #Step 4: Print to the console the ObjectID of the new document
    print('Created {0} of 10 as {1}'.format(x,result.inserted_id))
#Step 5: Tell us that you are done


# result = db.reviews.update_one({'_id' : ASingleReview.get('_id') }, {'$inc': {'likes': 1}})
# print('Number of documents modified : ' + str(result.modified_count))

# UpdatedDocument = db.reviews.find_one({'_id':ASingleReview.get('_id')})
# print('The updated document:')
# pprint(UpdatedDocument)