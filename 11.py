def isPrime(n):
    for i in range(2,int(n**0.5)+1):
        if n%i==0:
            return False

    return True
l=[]
for  i in range(2,20):
	if isPrime(i):
		l.append(i)
print l
