import math
import time
from datetime import datetime, timedelta as delta

f = 1
w = 40
h = 180
start = datetime(1970, 9, 3, 12, 0)
zeitpunkt = start
step = f * 2 * math.pi / h

for i in range(h):
	temp = int(math.sin(i * step) * w)
	print(temp)
	zeitpunkt = zeitpunkt + delta(minutes=15)
	print(zeitpunkt)
	print("test")
	time.sleep(1)
