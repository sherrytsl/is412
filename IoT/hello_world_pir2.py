import RPi.GPIO as GPIO
import time
import datetime
import LED

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
    while count<6:
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
    while timer <= 15:
        print("SHD BE BLUE")
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
            LED.blueOn()
            led_colour = "b"
            timer_sit = datetime.datetime.now()
    elif led_colour == "b":
        print('dfddfdfdf')
        if check_no_motion_1min(pir_io_num):
            print("wWAWAWAWAW")
            led_colour = 'r'
            LED.blueOff()
            LED.redOn()
            timer_leave = datetime.datetime.now()
    elif led_colour == "r":
        pass
        # stopped for 07/10/2020, waiting on RFID soddering kit to proceed
        # code works till here no bugs