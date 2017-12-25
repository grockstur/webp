import random
N = int(input("N = "))
if N <= 0:
	print("Error! Wrong input")
else:
	A = []
	for i in range(N):
		A.append(random.randint(0, 100))
	for i in range(0, int(N/2), 2):
		print("A[", i, "]=", A[i])
		print("A[", i+1, "]=", A[i+1])
		print("A[", N-i-1, "]=", A[N-i-1])
		print("A[", N-i-2, "]=", A[N-i-2])
stop = input("Press Enter to quit...")