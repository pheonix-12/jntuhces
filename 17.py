f1=open("a.txt","r")
l=[]
for line in f1:
	words=line.split()
	for word in words:
		for c in word:
			l+=(list(c))
u=list(set(l))
x=[]
for i in u:
	x.append(ord(i))
x.sort()
for i in x:
	print chr(i)
