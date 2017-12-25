import random
N = int(input("N = "))
if N <= 0:
	print("Error! Wrong input")
else:
	A = []
	for i in range(N):
		A.append(random.randint(0, 100))
	for el in A:
		print(el)
	LM = 'not found'
	for i in range (1, N-1):
		if (A[i] > A[i-1] and A[i] > A[i+1]):
			LM = A[i]
	print("Local max = ", LM)
stop = input("Press Enter to quit...")