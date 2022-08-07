import pandas

URL = 'https://docs.google.com/spreadsheets/d/1tU-FJdSJsxXrb_SKwo-MDMW84aCTsROIJbKwmWHjW-o/edit#gid=0'

df = pandas.read_csv(URL)

print(df)
