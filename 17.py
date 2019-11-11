f1=open("a.txt","r")
l=[]
for line in f1:
	words=line.split()
u=list(set(words))
x=[]
u.sort()
for i in u:
	print i;
