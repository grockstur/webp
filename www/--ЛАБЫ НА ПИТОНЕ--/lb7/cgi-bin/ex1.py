#!/usr/bin/env python3
import cgi, cgitb
cgitb.enable()

form = cgi.FieldStorage()
fio = form.getfirst("FIO", "")
phone = form.getfirst("phone", "")
email = form.getfirst("email", "")
adress = form.getfirst("adress", "")
dirr = form.getfirst("dir", "")
group = form.getfirst("group", "")
nname = form.getfirst("nname", "")
model = form.getfirst("model", "")
count = form.getfirst("count", "")
comm = form.getfirst("comm", "")

print("Content-type: text/html\n")
print("""<!DOCTYPE HTML>
	<html>
	<head>
	<link href="../css/style.css" rel="stylesheet">
	<title>7.1</title>
	</head>
<body>""")
print("<form><h1>Заявка на получение оборудования</h1><hr><p>от: {}.</p>".format(fio))
print("<p>тел.: {}</p>".format(phone))
print("<p>E-mail: {}</p>".format(email))
print("<p>Адрес: {}</p><hr>".format(adress))
print("<p>Тип оборудования: {}, ".format(dirr))
print("{}.</p>".format(group))
print("<p>Наименование: {}.</p>".format(nname))
print("<p>Модель: {}.</p>".format(model))
print("<p>В количестве: {} экземпляр(ов).</p>".format(count))
print("<p>Комментарий к заявке: '{}'</p><hr></form>".format(comm))
print("""<div class="navigation">
			<a href="../ex1.html">Назад</a>
		</div></body></html>""")
