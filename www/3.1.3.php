<?php
	switch ($_COOKIE['count']) {
		case 0: {
			setcookie('first', 3);
			setcookie('count', 1);
			break;
		}
		case 1: {
			setcookie('second', 3);
			setcookie('count', 2);
			break;
		}
		case 2: {
			setcookie('third', 3);
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
		<a href="3.1.2.php">Страница 2</a>
	</body>
</html>

