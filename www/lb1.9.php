<html>
	<head>
		<meta charset="utf8">
		<link href="styles/style1.css" rel="stylesheet">
		<title>1.9</title>
	</head>
	<body>
		<div class='navigation'>
			<a href='lb1.8.php'>< Предыдущая</a>
			<a href='lb1.10.php'>Следующая ></a>
		</div>
		<form method = 'post'>
			<p>Строка: <input type="text" name="s"></input></p>
			<input type="submit" />
		<p> 
		<?php 
			$s = (string) $_POST['s'];
			if ($s == ''){
				echo "";
			} else {
				$count = 0;
				for ($i = 0; $i < strlen($s); $i++) {
					if (preg_match('/^[A-Z]$/', $s[$i])) {
						$count++;
					}
				}
				echo "<p>$count прописных латинских букв</p>";
			}
		?>
		</p>
		</form>
		<div class='navigation'>
			<a href='index.html'>На главную</a>
		</div>
	</body>
</html>