L = float(input("Length = "))
N = int(input("Units = "))
if  N > 5 or N < 1:
	print("Error! Wrong input")
elif N == 1:
	print(L*10)
elif N == 2:
	print(L/1000)
elif N == 3:
	print(L)
elif N == 4:
	print(L*1000)
else:
	print(L*100)
stop = input("Press Enter to quit...")