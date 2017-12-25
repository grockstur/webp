N = int(input("N = "))
if N <= 0:
	print("Error! Wrong input")
else:
	K = 0
	while(K*K <= N):
		K = K + 1
	print("K = ", K-1)
stop = input("Press Enter to quit...")