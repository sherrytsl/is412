import RPi.GPIO as GPIO
import LED, Read
import time, datetime
from os import urandom
import requests, pprint


GPIO.cleanup()
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
GPIO.setup(7, GPIO.IN)
pir_io_num = 7
count_detect = 0
count_detect_old = count_detect
LED.greenOff()
LED.yellowOff()
LED.blueOff()
LED.redOff()
led_colour = 'g'
LED.greenOn()
timer_sit = None
timer_leave = None
timer_clean = None
table_id = 1

url = 'http://cleanerdash_deploy-nice-marmot-lf.cfapps.us10.hana.ondemand.com/'
update_table_status_url_workaround_green = url + 'tablestatus/update_workaround_green/'
update_table_status_url_workaround_yellow = url + 'tablestatus/update_workaround_yellow/'
update_table_status_url_workaround_red = url + 'tablestatus/update_workaround_red/'
# update_cleaning_records_url_workaround = url + 'cleaning_workaround/'


'''
def wait_for_motion(gpio_num):
    i = GPIO.input(gpio_num)
    print(i)
    while i == 0:
        i = GPIO.input(gpio_num)
'''

def check_motion_5_sec(gpio_num): # this is for green to yellow
    i = GPIO.input(gpio_num)
    print(i)
    count = 0
    while count<2:
        if i == 1:
            count += 1
            print("Current Count = " + str(count))
        else:
            count = 0
            print("COUNT RESET TO ZERO")
        time.sleep(1)
        i = GPIO.input(gpio_num)
    print("SOMEONE SAT")
    print("OCCUPIED")
    return True

def check_no_motion_1min(gpio_num): #this is for yellow to red
    timer = 0
    i = GPIO.input(gpio_num)
    while timer <= 2:
        print("Current timer = " + str(timer))
        if i == 0:
            timer += 1
        else:
            timer = 0
        time.sleep(1)
        i = GPIO.input(gpio_num)
    print("15sec completed")
    print("DIRTY")
    return True


payload  = {}
headers= {}

# response = requests.request("GET", url, headers=headers, data = payload)

# print(response.text.encode('utf8'))

url_postman = "http://cleanerdash_deploy-nice-marmot-lf.cfapps.us10.hana.ondemand.com/tablestatus/update_workaround_yellow/"

def status_yellow():
    res = requests.request("GET", update_table_status_url_workaround_yellow)

def status_red():
    res = requests.request("GET", update_table_status_url_workaround_red)

def status_green():
    res = requests.request("GET", update_table_status_url_workaround_green)


while True:
    if led_colour == "g":
        if check_motion_5_sec(pir_io_num):
            LED.greenOff()
            LED.redOn()
            led_colour = "y"
            timer_sit = datetime.datetime.now()
            print("sending to api.py")
            status_yellow()
    elif led_colour == "y":
        print("Waiting for eaters to leave")
        if check_no_motion_1min(pir_io_num):
            led_colour = 'r'
            timer_leave = datetime.datetime.now()
            status_red()
    elif led_colour == "r":
        print("Awaiting RFID tap")
        check , cleaner_name, cleaner_id = Read.read()
        if check:
            timer_clean = datetime.datetime.now()
            led_colour = "g"
            status_green()
            LED.redOff()
            LED.greenOn()
            print("CLEANED BY " + cleaner_name)
            print(cleaner_id)
            sitting_time = round(float((timer_leave - timer_sit).total_seconds()/60),4)
            cleaning_time = round(float((timer_clean - timer_leave).total_seconds()/60),4)
            # send to DB
            # There is currently an error in the POST method
            # data = {
            #     "timestamp" : timer_clean.strftime("%d/%m/%Y, %H:%M:%S"),
            #     "eid" : cleaner_id,
            #     "name" : cleaner_name,
            #     "table_id" : table_id,
            #     "time_sat" : timer_sit.strftime("%d/%m/%Y, %H:%M:%S"),
            #     "sitting_duration" : sitting_time,
            #     "cleaning_delay": cleaning_time
            #     }
            # res = requests.post(update_cleaning_records_url_workaround, json = data)
            timer_sit = None
            timer_leave = None
            timer_clean = None