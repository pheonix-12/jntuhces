l=[]
for i in range(3):
	l.append(int(input()))
l.sort(reverse=True)
print "The greatest of three numbers is ",l[0]
