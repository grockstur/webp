<html>
	<head>
		<meta charset="utf8">
		<link href="styles/style1.css" rel="stylesheet">
		<title>1.3</title>
	</head>
	<body>
		<div class='navigation'>
			<a href='lb1.2.php'>< Предыдущая</a>
			<a href='lb1.4.php'>Следующая ></a>
		</div>
		<form method = 'post'>
			<p>X: <input type="text" name="X"></input></p>
			<input type="submit" />
		<p> 
		<?php 
			$X = $_POST['X'];
			if ($X == ''){
				echo "";
			} else {
				switch ($X) {
					case '1': {
						echo "понедельник";
						break;
					}
					case '2': {
						echo "вторник";
						break;
					}
					case '3': {
						echo "среда";
						break;
					}
					case '4': {
						echo "четверг";
						break;
					}
					case '5': {
						echo "пятница";
						break;
					}
					case '6': {
						echo "суббота";
						break;
					}
					case '7': {
						echo "воскресенье";
						break;
					}
					default:
						echo "Ошибка! Нет таких дней недели.";
						break;
				}
			}
		?>
		</p>
		</form>
		<div class='navigation'>
			<a href='index.html'>На главную</a>
		</div>
	</body>
</html>