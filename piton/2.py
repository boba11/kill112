def sortirovka(q):
	sort = sorted(q)
	otvet = ""
	for char in sort:
		otvet = otvet + str(char)
	print otvet;
a = raw_input("vvedite schislo: ")
sortirovka(a)

