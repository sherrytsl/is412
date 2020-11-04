import RPi.GPIO as GPIO
import time
import datetime
import LED
import Read

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
table_id = "T001"

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
    while count<5:
        if i == 1:
            count += 1
            print("Current Count = " + str(count))
        else:
            count = 0
            print("COUNT RESET TO ZERO")
        time.sleep(1)
        i = GPIO.input(gpio_num)
    print("SOMEONE SAT")
    return True

def check_no_motion_1min(gpio_num): #this is for yellow to red
    timer = 0
    i = GPIO.input(gpio_num)
    while timer <= 5:
        print("Current timer = " + str(timer))
        if i == 0:
            timer += 1
        else:
            timer = 0
        time.sleep(1)
        i = GPIO.input(gpio_num)

    print("15sec completed")
    return True

while True:
    if led_colour == "g":
        if check_motion_5_sec(pir_io_num):
            LED.greenOff()
            LED.redOn()
            led_colour = "y"
            timer_sit = datetime.datetime.now()
    elif led_colour == "y":
        print("Waiting for eaters to leave")
        if check_no_motion_1min(pir_io_num):
            led_colour = 'r'
            timer_leave = datetime.datetime.now()
    elif led_colour == "r":
        print("Awaiting RFID tap")
        check , cleaner_name, cleaner_id = Read.read()
        if check:
            timer_clean = datetime.datetime.now()
            led_colour = "g"
            LED.redOff()
            LED.greenOn()
            print("CLEANED BY " + cleaner_name)
            sitting_time = round(float((timer_leave - timer_sit).total_seconds()/60),4)
            cleaning_time = round(float((timer_clean - timer_leave).total_seconds()/60),4)
            #send to db the cleaner_id, cleaner_name, table_id and sit/clean time , reset all timers
            timer_sit = None
            timer_leave = None
            timer_clean = None

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

        # Waiting for JSON to be sent over has yet to be coded. Last left at 4.15 PM, 4/11