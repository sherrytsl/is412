from pymongo import MongoClient
# pprint library is used to make the output look more pretty
from pprint import pprint
import time
import datetime
# connect to MongoDB, change the << MONGODB URL >> to reflect your own connection string
client = MongoClient("mongodb+srv://james:root@cluster0.how3s.mongodb.net/CleanerDash?retryWrites=true&w=majority")
# db=client.admin
db = client.CleanerDash
# # Issue the serverStatus command and print the results
# serverStatusResult=db.command("serverStatus")
# pprint(serverStatusResult)
allrows = db.CleaningRecords.find()
for document in allrows:
    print(document)


db.CleaningRecords.insert({
    "time_cleaned" : datetime.datetime.now(),
    "eid" : 1,
    "name" : "Kare En",
    "table_id" : 1,
    "time_sat" : 132,
    "sitting_duration" : 1232,
    "cleaning_delay" : 313 
}) 
print()
allrows = db.CleaningRecords.find()
for document in allrows:
    print(document)

# UPDATE
    # db.food_Table.update(
    #     {"table_id" : table_id},
    #     {$set: {"table_status" : status}
    #     }
    #     )

    # INSERT
    # clean_Records_sendDB = {
    #     "timestamp" : timer_clean,
    #     "eid" : cleaner_id,
    #     "name" : cleaner_name,
    #     "table_id" : table_id,
    #     "time_sat" : timer_sit,
    #     "sitting_duration" : sitting_time,
    #     "cleaning_delay" : cleaning_time
    # }