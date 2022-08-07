file = open('file.rtf','r')

f = file.readlines()

l=[]

for line in f:
    l.append(line.strip())
    
print(l)
