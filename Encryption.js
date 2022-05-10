def convert(txt): if (txt == "A"): k=1
elif (txt == "B"): k=2
elif (txt == "C"): k=3
elif (txt == "D"): k=4
elif (txt == "E"): k=5
elif (txt == "+"): k = 74
elif (txt == "/"): k = 75
elif (txt == "!"): k = 63
elif (txt == "@"): k = 64
elif (txt == "#"): k = 65
elif (txt == "$"): k = 66
elif (txt == "%"): k = 67
elif (txt == "^"): k = 68
elif (txt == "&"): k = 69
elif (txt == "*"): k = 70
elif (txt == "("): k = 71
elif (txt == ")"): k = 72
elif (txt == "-"): k = 73
elif (txt == "+"): k = 74
elif (txt == "/"): k = 75
else:
k = "ERROR" return k
38
   
     def revconvert(num): if (num == 1): k = "A"
elif (num == 2): k = "B"
elif (num == 3): k = "C"
elif (num == 4): k = "D"
elif (num == 5): k = "E"
elif (num == 6): k = "F"
elif (num == 63): k = "!"
elif (num == 64): k = "@"
elif (num == 65): k = "#"
elif (num == 66): k = "$"
elif (num == 67): k = "%"
elif (num == 68): k = "^"
elif (num == 69): k = "&"
elif (num == 70): k = "*"
39
   
     elif (num == 71): k = "("
elif (num == 72): k = ")"
elif (num == 73): k = "-"
elif (num == 74): k = "+"
elif (num == 75): k = "/"
else:
k = "Error"
return k def gcd(a, b): if b == 0:
return a
else:
return gcd(b, a % b)
if name ==" main ":
p = int(input('Enter the value of p = ')) q = int(input('Enter the value of q = ')) # Input Text..........
file = open("s1.txt","r") text=file.read() file.close()
lk = []
#text = input('Enter the value of text = ') l1 = len(text)
k10 = ""
k20 = ""
for i in range(0, l1):
 40
   
no = convert(text[i]) n=p*q
if (no > n):
print("Please enter correct text ......... ")
else:
t = (p - 1) * (q - 1) for e in range(2, t): if gcd(e, t) == 1:
break
for i in range(1, 10):
x=1+i*t
if (x%e==0)
d = int(x /e)
break
ctt=Decimal(0)
ctt = pow(no, e)
ct = ctt % n
lk.append(ct)
ct1 = ct % 75
print('n = ' + str(n) + ' e = ' + str(e) + ' t = ' + str(t) + ' d = ' + str(d) + ' cipher text = ' + str(ct1)) k1 = revconvert(ct1)
k10 = k10 + k1 print("Cipher Value", k10) print("Original Value : ",lk) def get_lk():
return lk
file = open("sample1.txt","w") file.write(k10)
file.close()
file = open("sample2.txt","w") for i in lk:
file.write(str(i)+" ") file.close()
41