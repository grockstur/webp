<?php
	session_start();
?>
<html>
	<head>
		<meta charset="utf8">
		<link href="styles/style1.css" rel="stylesheet">
		<title>3.2</title>
	</head>
	<body>
		<div class='navigation'>
			<a href='lb3.2.php'>< Назад</a>
		</div>
		<p>
		<?php 
			$name = $_SESSION["name"];
			if ($name)
				print "Привет, $name!";
		?>
		</p>
		<form method = 'post' action='3.2.22.php'>
			<p>Ваше имя: <input type="text" name="name"></input></p>
			<input type="submit"/>
		</form>
		<div class='navigation'>
			<a href='index.html'>На главную</a>
		</div>
	</body>
</html>