def fab(n):
	l=[0,1]
	a=0
	b=1
	for i in range(n-2):
		c=a+b
		#print c
		l.append(c)
		a=b
		b=c
	return l
	
