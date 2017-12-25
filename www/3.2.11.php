<?php
	$name = $_POST["name"];
	setcookie("name", $name);
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
			$name = $_COOKIE['name'];
			if ($name) {
				print "Добро пожаловать, $name";
			} else {
				print "Обновите страницу";
			}
		?>
		</p>
		<div class='navigation'>
			<a href='index.html'>На главную</a>
		</div>
	</body>
</html>

