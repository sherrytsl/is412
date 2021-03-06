from json import dump
import requests, json, datetime
from flask import Flask, request, jsonify
from flask_cors import CORS, cross_origin
from flask_pymongo import PyMongo
from datetime import datetime, timedelta
from pprint import pprint
from bson import json_util
import os

app = Flask(__name__)

app.config["MONGO_URI"] = "mongodb://b9UJXPNOtvai7SqE:fHTf8qKlYq3eprUF@10.11.241.2:60666/g2xtvEJCyZxcZ09V"
mongo = PyMongo(app)

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


------------------------------------------------------------------------------
Flow of tasks to complete:
Create MongoDB instance on SMUCF
Package up this api.py to CF + deploy
Call api.py(CLOUD deployed) with Main.py on RPi (API end point on cockpit ? confirm tmr)

talk to kaixian to link w ui (we need to make functions for him to access DB)
"""
@app.route("/onetimeinsert")
def onetimeinsert():
    # CReating tables and insert table & employee data

    mongo.db.TableStatus.find_one_and_update({"table_id" : 1 }, {"$set": {"table_status" : "g"}},upsert=True)
    mongo.db.TableStatus.find_one_and_update({"table_id" : 2 }, {"$set": {"table_status" : "g"}},upsert=True)
    mongo.db.TableStatus.find_one_and_update({"table_id" : 3 }, {"$set": {"table_status" : "g"}},upsert=True)

    mongo.db.CleaningRecords.find_one_and_update({"eid" : 1 }, {"$set": {"name" : "Kare En", "table_id" : 1, "time_sat" : "07/11/2020, 14:05:34", "sitting_duration" : 22.9, "cleaning_duration": 31}},upsert=True)

    mongo.db.Employee.find_one_and_update({"eid" : 1 }, {"$set": {"firstName" : "Kare En", "lastName" : "Lim", "age" : 88, "assignedZone" : [1,2,3], "employeeType": "Cleaner", "password" : "karen123"}},upsert=True)

    # mongo.db.TableStatus.insert_one({"table_id" : 1, "table_status" : 'g'})
    # mongo.db.TableStatus.insert_one({"table_id" : 2, "table_status" : 'g'})
    # mongo.db.TableStatus.insert_one({"table_id" : 3, "table_status" : 'g'})
    print ("MongoDB Database AFTER:", mongo.db)
    return "Successful"


@app.route("/tablestatus")
def get_table_status():
    # RETRIEVE STATUS OF ALL TABLES
    documents = [doc for doc in mongo.db.TableStatus.find({})]
    return json_util.dumps({'Table History': documents})


@app.route("/employee")
def get_employee():
    # RETRIEVE ALL EMPLOYEE RECORDS
    documents = [doc for doc in mongo.db.Employee.find({})]
    return json_util.dumps({'Employee': documents})


@app.route("/cleaningrecords")
def get_cleaningrecords():
    # RETRIEVE ALL CLEANING RECORDS
    documents = [doc for doc in mongo.db.CleaningRecords.find({})]
    return json_util.dumps({'Cleaning Record': documents})


# WORKAROUND METHODS
#--------------------------------------------------------------------------------------------------------------------------------------------------------------------

#POST Main.py will send table status here
@app.route("/tablestatus/update_workaround_green/")
def update_table_status_workaround_green():
    mongo.db.TableStatus.find_one_and_update({"table_id" : 1}, {"$set": {"table_status" : 'g'}},upsert=True)
    documents = [doc for doc in mongo.db.TableStatus.find({})]
    return json_util.dumps({'Table History': documents})

@app.route("/tablestatus/update_workaround_yellow/")
def update_table_status_workaround_yellow():
    mongo.db.TableStatus.find_one_and_update({"table_id" : 1}, {"$set": {"table_status" : 'y'}},upsert=True)
    documents = [doc for doc in mongo.db.TableStatus.find({})]
    return json_util.dumps({'Table History': documents})

@app.route("/tablestatus/update_workaround_red/")
def update_table_status_workaround_red():
    mongo.db.TableStatus.find_one_and_update({"table_id" : 1}, {"$set": {"table_status" : 'r'}},upsert=True)
    documents = [doc for doc in mongo.db.TableStatus.find({})]
    return json_util.dumps({'Table History': documents})

#POST Main.py will send timing data here (sit/leave/clean)
# NEED TO CHANGE ALL STATIC VARIABLES TO VARIABLES FROM IOT MAIN.PY 
@app.route("/cleaning_workaround/", methods=['GET', 'POST'])
def update_cleaning_workaround():
    content = request# JSON of cleaning data is sent through request and we take the json out and assign to content
    # process content here (Sort the json out to send to Mongo etc)
    # INSERT CLEANING STATUS
    print("*************************")
    json.dumps(content)
    # print(content.decode("utf-8"))
    # print(content.is_json)
    # print(content)
    # pprint(json_util.loads(content))
    print("-----------------------")
    try:
        # pprint(json_util.loads(content))
        mongo.db.CleaningRecords.insert_one(content)
    except:
        return jsonify({"message": "An error occurred when inserting cleaning record."}), 500
    # print("Current documents in collection after adding Kare En TAN:")
    # allrows = db.CleaningRecords.find()
    # for document in allrows:
    #     print(document)
    return jsonify("Success!"), 201

# WORKAROUND METHODS
#--------------------------------------------------------------------------------------------------------------------------------------------------------------------

#POST Main.py will send table status here
@app.route("/tablestatus/update/", methods=['POST'])
# @app.route("/tablestatus/update/")
# @cross_origin(supports_credentials=True)
def update_table_status():
    # Update STATUS OF A TABLES
    # print(request.args)
    # for key, value in request.args:
    #     print(key)
    #     print("AAAAAAAAAAAAAA")
    #     print(value)
    # content = json.loads(request.json)
    content = request.json
    print("-------------------")
    print(content)
    print(type(content))
    print("-------------------")
    # mongo.db.TableStatus.find_one_and_update({"table_id" : content["table_id"]}, {"$set": {"table_status" : content["table_status"]}},upsert=True)
    documents = [doc for doc in mongo.db.TableStatus.find({})]
    pprint(json_util.dumps({'Table History': documents}))
    return json_util.dumps({'Table History': documents})

#POST Main.py will send timing data here (sit/leave/clean)
# NEED TO CHANGE ALL STATIC VARIABLES TO VARIABLES FROM IOT MAIN.PY 
@app.route("/cleaning/", methods=['POST'])
# @app.route("/cleaning/")
@cross_origin(supports_credentials=True)
def update_cleaning():
    content = request.json # JSON of cleaning data is sent through request and we take the json out and assign to content
    # process content here (Sort the json out to send to Mongo etc)
    # INSERT CLEANING STATUS
    try:
        pprint(json_util.loads(content))
        mongo.db.CleaningRecords.insert_one(content)
    except:
        return jsonify({"message": "An error occurred when inserting cleaning record."}), 500
    # print("Current documents in collection after adding Kare En TAN:")
    # allrows = db.CleaningRecords.find()
    # for document in allrows:
    #     print(document)
    return jsonify("Success!"), 201


port = int(os.getenv("PORT", 0))
if __name__ == '__main__':
    if port != 0:
        app.run(host='0.0.0.0', port=port)
    else:
        app.run()

