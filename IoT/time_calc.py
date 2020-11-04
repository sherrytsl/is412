import datetime, time

time1 = datetime.datetime.now()
time.sleep(3)
time2 = datetime.datetime.now()



def sitting_time(sit, leave):
    return leave-sit

def clean_delay_time(leave, clean):
    pass

ans1 = sitting_time(time1,time2)
print(type(ans1))
print(ans1)
#ans2 = int(ans1.total_minutes())
ans3 = round(float(ans1.total_seconds()/60),4)
#print(type(ans2))
#print(ans2)
print(type(ans3))
print(ans3)