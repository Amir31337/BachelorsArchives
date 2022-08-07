file = open('file.rtf','r')

f = file.readlines()

l=[]

for line in f:
    l.append(line[:-1])
    
i=len(l)
j=i-1

print(l[j])
