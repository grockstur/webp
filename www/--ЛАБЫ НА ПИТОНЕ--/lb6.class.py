import math

class Rhombus(object):
	def __init__(self):
		super(Rhombus, self).__init__()
		self.d1 = 0
		self.d2 = 0
		self.S = 0
		self.P = 0

	def setVal(self):
		d1 = int(input("d1 = "))
		self.d1 = d1
		d2 = int(input("d2 = "))
		self.d2 = d2

	def getS(self):
		self.S = self.d1 * self.d2
		print("S = ", self.S)

	def __calcSide(self):
		return math.sqrt(math.pow(self.d1/2, 2) + math.pow(self.d2/2, 2))

	def getP(self):
		self.P = 4 * self.__calcSide();
		print("P = ", self.P)

	def getSide(self):
		print("Side = ", self.__calcSide())

r = Rhombus()
r.setVal()
r.getSide()
r.getP()
r.getS()
input("Press Enter yo quit...")