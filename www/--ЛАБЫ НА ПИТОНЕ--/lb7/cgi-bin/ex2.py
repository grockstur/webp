#!/usr/bin/env python3
import cgi, cgitb, os
cgitb.enable()

UPLOAD_DIR = 'upload/'

print("Content-Type: text/html")
print('''
<html>
<head>
	<title>Upload File</title>
</head>
<body>
''')
form = cgi.FieldStorage()
fileitem = form["myfile"]
if fileitem.filename:
	fn = os.path.basename(fileitem.filename)
	open(UPLOAD_DIR + fn, 'wb').write(fileitem.file.read())
	print('<h1>Completed file upload</h1>')
print('''
<hr>
<a href="../ex2.html">< Назад</a>
</body>
</html>
''')