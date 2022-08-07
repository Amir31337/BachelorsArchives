import pandas as pd

url='https://docs.google.com/spreadsheets/d/1tU-FJdSJsxXrb_SKwo-MDMW84aCTsROIJbKwmWHjW-o/export?format=csv&gid=0'

df=pd.read_csv(url)

last_line=df.iloc[-1]
#print("last line is:")
print(last_line)

#print("-------------------------")

#last_line_adress = df.iloc[-1]['address']
#print("last adress is:")
#print(last_line_adress)

#print("-------------------------")

#last_line_time=list(df.iloc[-1])[3]
#print("last time is:")
#print(last_line_time)
