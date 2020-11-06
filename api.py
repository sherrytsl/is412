import requests
import json
from flask import Flask, request, jsonify
from flask_sqlalchemy import SQLAlchemy
from flask_cors import CORS, cross_origin
from datetime import datetime, timedelta
# from os import environ

app = Flask(__name__)
# app.config['SQLALCHEMY_DATABASE_URI'] = environ.get('dbURL')
# #app.config['SQLALCHEMY_DATABASE_URI'] = 'mysql+mysqlconnector://root@localhost:3306/stock'
# app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False

db = 123 # SQLAlchemy(app)
#  This microservices contains Stock and Stockdata class

"""
List of Functions for API
    @app.route("/tablestatus/all")
    - def get_table_status()       ----> Retrieves the table status of "r", "y" or "g" for all tables

    @app.route("/cleaning/", methods=['POST'])
    - def update_cleaning()             ----> Inserts the cleanng data sent from RPi

Port Number
    - 5000

!!! Need to add in Main.py on RPi !!!
For reference, here's complete code for how to send json from a Python client:

import requests
res = requests.post('http://localhost:5000/api/add_message/1234', json={"mytext":"lalala"})  --> The address change to ngrok address
if res.ok:
    print res.json()
"""

#GET
@app.route("/tablestatus/<string:table>")
def get_table_status(table):
    # RETRIEVE STATUS OF TABLE
    return jsonify(status.json())

#GET
@app.route("/tablestatus/all")
def get_table_status():
    # RETRIEVE STATUS OF ALL TABLES
    return jsonify(all_status.json())

#POST
@app.route("/cleaning/", methods=['POST'])
def update_cleaning():
    content = request.json # JSON of cleaning data is sent through request and we take the json out and assign to content
    # process content here (Sort the json out to send to Mongo etc)

    # INSERT CLEANING STATUS
    # try:
    #     db.session.add(user)
    #     db.session.commit()
    # except:
    #     return jsonify({"message": "An error occurred creating the user."}), 500
    return jsonify(user.json()), 201


if __name__ == '__main__':
    app.run(host='0.0.0.0',port=5000, debug=True)
