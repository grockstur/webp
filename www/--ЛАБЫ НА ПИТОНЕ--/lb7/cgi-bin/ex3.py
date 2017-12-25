#!/usr/bin/env python3
import cgi, cgitb, smtplib
cgitb.enable()

print("Content-Type: text/html")
print('''
<html>
<head>
	<title>Sending Mail</title>
</head>
<body>
''')
form = cgi.FieldStorage()
if form["lastname"].value != "" and form["name"].value != "" and form["age"].value != "" and form["email"].value != "":
	toaddress = form["email"].value
	fromaddress = ["smolkov_maksim@mail.invalid"]
	message= """\
	From: %s
	To: %s
	-----------
	Lastname: %s
	Name: %s
	Age: %s
	""" % (fromaddress, toaddress, form["lastname"].value, form["name"].value, form["age"].value)

	server = smtplib.SMTP('localhost')
	serrver.set_debuglevel(1)
	server.sendmail(fromaddress, toaddress, message)
	server.quit()
	print('<h1>Completed file upload</h1>')
print('''
<hr>
<a href="../ex2.html">< Назад</a>
</body>
</html>
''')