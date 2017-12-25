<?php
	switch ($_COOKIE['count']) {
		case 0: {
			setcookie('first', 2);
			setcookie('count', 1);
			break;
		}
		case 1: {
			setcookie('second', 2);
			setcookie('count', 2);
			break;
		}
		case 2: {
			setcookie('third', 2);
			header('Location: 3.1.4.php');
			break;
		}
		
		default:
			print "<p><b>Error!</b></p>";
			break;
	}
?>
<html>
	<head>
		<meta charset="utf8">
		<link href="styles/style1.css" rel="stylesheet">
		<title>3.1</title>
	</head>
	<body>
		<p>Перейдите ещё:</p>
		<a href="3.1.1.php">Страница 1</a>
		<a href="3.1.3.php">Страница 3</a>
	</body>
</html>

