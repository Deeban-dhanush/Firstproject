class triangle:
    def __init__(self,a,b,c):
        self.a = a
        self.b = b
        self.c = c
    def perimeter (self):
        perimeter = self.a + self.b + self.c
        return perimeter
t1 = triangle(3,4,5)
print("The Perimeter of Triangle is",t1.perimeter())