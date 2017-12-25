<html>
	<head>
		<meta charset="utf8">
		<link href="styles/style1.css" rel="stylesheet">
		<title>1.6</title>
	</head>
	<body>
		<div class='navigation'>
			<a href='lb1.5.php'>< Предыдущая</a>
			<a href='lb1.7.php'>Следующая ></a>
		</div>
		<form method = 'post'>
			<p>N: <input type="text" name="N"></input></p>
			<input type="submit" />
		<p> 
		<?php 
			$N = (int) $_POST['N'];
			if ($N == ''){
				echo "";
			} elseif ($N <= 0) {
				echo "Ошибка! N должно быть неотрицательным числом.";
			} else {
				$Arr = array();
				for ($i = 0; $i < $N; $i++) {
					$Arr[$i] = rand();
				}
				for ($i = 0; $i < $N/2; $i++) {
					$j = $N - 1 - $i;
					if ($j != $i) {
						print("<p>Array[$i] = $Arr[$i]</p><p>Array[$j] = $Arr[$j]</p>");
					} else {
						print("<p>Array[$i] = $Arr[$i]</p>");
					}
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