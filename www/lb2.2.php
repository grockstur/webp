<html>
	<head>
		<meta charset="utf8">
		<link href="styles/style1.css" rel="stylesheet">
		<title>2.2</title>
	</head>
	<body>
		<div class='navigation'>
			<a href='lb2.1.php'>< Предыдущая</a>
			<a href='lb2.3.php'>Следующая ></a>
		</div>
		<form enctype="multipart/form-data" method = 'post'>
			<input type="hidden" name="MAX_FILE_SIZE" value="9000000000"/>
			<input type="file" name="userfile"/>
			<input type="submit"/>

		<?php
			$uploaddir = '/home/webprogramming.me/www/user_files/';
			$uploadfile = $uploaddir.rawurldecode(basename($_FILES['userfile']['name']));
			if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
				$filename = $_FILES['userfile']['name'] ;
				echo "<p>Файл $filename загружен.</p>";
			} else {
				echo "<p>Ошибка при загрузке файла.</p>";
			}
		?>
		
		</form>

		<div class='navigation'>
			<a href='index.html'>На главную</a>
		</div>
	</body>
</html>

