import pandas as pd

df = pd.read_csv('sample4.csv')

last_line=df.iloc[-1]
print("last line is:")
print(last_line)

print("-------------------------")

last_line_adress = df.iloc[-1]['Game Length']
print("last adress is:")
print(last_line_adress)

print("-------------------------")

last_line_time=list(df.iloc[-1])[3]
print("last time is:")
print(last_line_time)




