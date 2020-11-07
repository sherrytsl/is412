import requests, json, datetime
from flask import Flask, request, jsonify
from flask_cors import CORS, cross_origin
from datetime import datetime, timedelta
from pymongo import MongoClient
from pprint import pprint
from bson import json_util

app = Flask(__name__)

# db = 123 # SQLAlchemy(app)
client = MongoClient("mongodb+srv://james:root@cluster0.how3s.mongodb.net/CleanerDash?retryWrites=true&w=majority")

db = client.CleanerDash

"""
List of Functions for API
    @app.route("/tablestatus")
    - def get_table_status()        ----> Retrieves the table status of "r", "y" or "g" for all tables

    @app.route("/tablestatus/update/", methods=['POST'])
    def update_table_status()       ----> Receives table status and updates mongodb

    @app.route("/cleaning/", methods=['POST'])
    - def update_cleaning()         ----> Inserts the cleanng data sent from RPi

Port Number
    - 5000

!!! Need to add in Main.py on RPi !!!
For reference, here's complete code for how to send json from a Python client:

import requests
res = requests.post('ngrok address', json={"mytext":"lalala"})
if res.ok:
    print res.json()
------------------------------------------------------------------------------

Flow of tasks to complete:
get flask working with MongoDB Atlas --> client = MongoClient("mongodb+srv://james:root@cluster0.how3s.mongodb.net/CleanerDash?retryWrites=true&w=majority" (from mongodbtest.py)
convert local IP to open IP with ngrok

SATURDAY WORK:
Call api.py(local) with Main.py on RPi (local through ngrok)
Create MongoDB instance on SMUCF
Package up this api.py to CF + deploy
Call api.py(CLOUD deployed) with Main.py on RPi (API end point on cockpit ? confirm tmr)

talk to kaixian to link w ui (we need to make functions for him to access DB)
"""
# DB URL for MongoDB




#GET Kai Xian use this to RETRIEVE table status
@app.route("/tablestatus")
def get_table_status():
    # RETRIEVE STATUS OF ALL TABLES
    documents = [doc for doc in db.TableStatus.find({})]
    pprint(documents)
    return json_util.dumps({'Table History': documents})
    # print(type(documents))
    # return documents

#POST Main.py will send table status here
@app.route("/tablestatus/update/", methods=['POST'])
def update_table_status():
    # Update STATUS OF A TABLES
    print(request.args)
    for key, value in request.args:
        print(key)
        print("AAAAAAAAAAAAAA")
        print(value)
    content = request.json
    # db.TableStatus.update_one({"table_id" : 1}, {"$set": {"table_status" : "g"}})
    print("-------------------")
    print(content)
    print(type(content))
    print("-------------------")
    db.TableStatus.update_one({"table_id" : content["table_id"]}, {"$set": {"table_status" : content["table_status"]}})
    documents = [doc for doc in db.TableStatus.find({})]
    pprint(documents)
    return json_util.dumps({'Table History': documents})

#POST Main.py will send timing data here (sit/leave/clean)
# NEED TO CHANGE ALL STATIC VARIABLES TO VARIABLES FROM IOT MAIN.PY 
@app.route("/cleaning/", methods=['POST'])
def update_cleaning():
    content = request.json # JSON of cleaning data is sent through request and we take the json out and assign to content
    # process content here (Sort the json out to send to Mongo etc)
    
    # print("Current documents in collection:")
    # allrows = db.CleaningRecords.find()
    # for document in allrows:
    #     print(document)

    # INSERT CLEANING STATUS
    try:
        db.CleaningRecords.insert_one(content)
    except:
        return jsonify({"message": "An error occurred when inserting cleaning record."}), 500

    # print("Current documents in collection after adding Kare En TAN:")
    # allrows = db.CleaningRecords.find()
    # for document in allrows:
    #     print(document)

    return jsonify("Success!"), 201

    # REFERENCE FROM MAIN.PY
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


if __name__ == '__main__':
    app.run(host='0.0.0.0',port=5000, debug=True)
