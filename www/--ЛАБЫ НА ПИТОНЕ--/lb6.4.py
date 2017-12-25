A = int(input("A = "))
B = int(input("B = "))
if A >= B:
	print("Error! Wrong input")
else:
	N = 0
	for i in range(A, B + 1):
		print(i)
		N += 1
	print("N = ", N)
stop = input("Press Enter to quit...")