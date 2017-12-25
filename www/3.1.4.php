<html>
	<head>
		<meta charset="utf8">
		<link href="styles/style1.css" rel="stylesheet">
		<title>3.1</title>
	</head>
	<body>
		<div class='navigation'>
			<a href='lb3.2.php'>Следующая ></a>
		</div>
		<p>
		<?php
			$first = $_COOKIE['first'];
			$second = $_COOKIE['second'];
			$third = $_COOKIE['third'];
			print "<b>История посещений страниц:</b><br>Страница № $first<br>Страница № $second<br>Страница № $third"
		?>
		</p>
		<div class='navigation'>
			<a href="lb3.1.php">Повторить</a><br>
			<a href='index.html'>На главную</a>
		</div>
	</body>
</html>

