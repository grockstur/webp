<html>
	<head>
		<meta charset="utf8">
		<link href="styles/style1.css" rel="stylesheet">
		<title>1.5</title>
	</head>
	<body>
		<div class='navigation'>
			<a href='lb1.4.php'>< Предыдущая</a>
			<a href='lb1.6.php'>Следующая ></a>
		</div>
		<form method = 'post'>
			<p>P: <input type="text" name="P"></input></p>
			<input type="submit" />
		<p> 
		<?php 
			$P = (float) $_POST['P'];
			if ($P == ''){
				echo "";
			} elseif ($P <= 0 || $P >= 25) {
				echo "Ошибка! Диапазон: 0 < P < 25.";
			} else {
				$S = 1000;
				$K = 0;
				while ($S <= 1100) {
					$S += $S/100*$P;
					$K++;
				}
				print("<p>Через $K месяцев</p><p>итоговый размер вклада = $S</p>");
			}
		?>
		</p>
		</form>
		<div class='navigation'>
			<a href='index.html'>На главную</a>
		</div>
	</body>
</html>