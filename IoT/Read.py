#!/usr/bin/env python

import RPi.GPIO as GPIO
import time
from mfrc522 import SimpleMFRC522

reader = SimpleMFRC522()

def read():
    try:
        reader.read()
        time.sleep(3)
        id, text = reader.read()
        print(id)
        print(text)
        return True, text, id
    except:
        return False

def testread():
    GPIO.cleanup()
    try:
        id, text = reader.read()
        print(id)
        print(text)
        return True
    except:
        return False
    #finally:
    #    GPIO.cleanup()

#testread()