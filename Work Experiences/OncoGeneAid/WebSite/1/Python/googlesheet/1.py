import pandas as pd

sheet_url = 'https://docs.google.com/spreadsheets/d/1tU-FJdSJsxXrb_SKwo-MDMW84aCTsROIJbKwmWHjW-o/edit#gid=0'

url_1 = sheet_url.replace("/edit#gid=", "/export?format=csv&gid=")

pd.read_csv(url_1)                        
