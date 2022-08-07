import pandas as pd

url='https://docs.google.com/spreadsheets/d/1tU-FJdSJsxXrb_SKwo-MDMW84aCTsROIJbKwmWHjW-o/export?format=csv&gid=0'

df=pd.read_csv(url)

last_line=df.iloc[-1]

with open('new.txt', 'w') as f:
    for word in last_line:
             f.write(word + "\n" )
