C = str(input("C: "))
stroka = str(input("Enter a string: "))
stroka0 = str(input("Enter a string0: "))
stroka1 = ""
for i in stroka:
	if (i == C):
		for j in stroka0:
			stroka1 += j
	stroka1 += i
print(stroka1)
stop = input("Press Enter to quit...")