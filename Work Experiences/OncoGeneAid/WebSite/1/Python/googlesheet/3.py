import pandas

googleSheetId = '<1tU-FJdSJsxXrb_SKwo-MDMW84aCTsROIJbKwmWHjW-o>'
worksheetName = '<Sheet1>'
URL = 'https://docs.google.com/spreadsheets/d/{0}/gviz/tq?اصنtqx=out:csv&sheet={1}'.format(
	googleSheetId,
	worksheetName
)

df = pandas.read_csv(URL)
print(df)
