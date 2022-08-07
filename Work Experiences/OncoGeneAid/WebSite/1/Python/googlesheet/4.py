import pandas as pd

new_google_sheet_url='https://docs.google.com/spreadsheets/d/1tU-FJdSJsxXrb_SKwo-MDMW84aCTsROIJbKwmWHjW-o/export?format=csv&gid=0'

df=pd.read_csv(new_google_sheet_url)

print(df)
