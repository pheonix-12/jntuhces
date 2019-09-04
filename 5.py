l1=[]
for i in range(10):
	l1.append(i)
l1.remove(5)
print "After removing 5 in list = ",l1
l2=[5]
l3=l1
l3.extend(l2)
print "After extending in list = ",l3
l1.append(l2)
print "After adding l2 in list = ",l1
del l1
del l2

