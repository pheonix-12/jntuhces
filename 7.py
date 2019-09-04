thisdict =	{
  "brand": "Ford",
  "model": "Mustang",
  "year": 1964
}
thisdict["color"] = "red"
print(thisdict)
thisdict.pop("color")
print thisdict["model"]
print thisdict.get("model")
thisdict["year"] = 2018
for x in thisdict:
	print(x) 
if "model" in thisdict:
	print("Yes, 'model' is one of the keys in the thisdict dictionary")
del thisdict["model"]
print(len(thisdict))
del thisdict
