<html>
	<head>
		<meta charset="utf8">
		<link href="styles/style1.css" rel="stylesheet">
		<title>1.7</title>
	</head>
	<body>
		<div class='navigation'>
			<a href='lb1.6.php'>< Предыдущая</a>
			<a href='lb1.8.php'>Следующая ></a>
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
					print("Array[$i] = $Arr[$i]<br>");
				}
				for ($i = $N; $i > 0; $i--) {
					if ($Arr[$i] < $Arr[$i+1] && $Arr[$i] < $Arr[$i-1]) {
						$lMin = $i;
					}
				}
				echo "Индекс первого локального минимума = $lMin";
			}
		?>
		</p>
		</form>
		<div class='navigation'>
			<a href='index.html'>На главную</a>
		</div>
	</body>
</html>