import math

def PowerA234(A):
	B = A*A
	C = B*A
	D = C*A
	res = [B, C, D]
	return res

for i in range(5):
	print("Number #", i+1)
	A = float(input("A = "))
	res = PowerA234(A);
	print("A^2 = ", res[0])
	print("A^3 = ", res[1])
	print("A^4 = ", res[2])
	print("--------------")
stop = input("Press Enter to quit...")