l=[]
for i in range(3):
	l.append(int(input()))
l.sort(reverse=True)
if ((l[0])**2)==((l[1])**2)+((l[2]**2)):
	print "Right Angled Triangle"
else :
	print "Not Right Angled Triangle"
