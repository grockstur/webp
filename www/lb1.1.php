<html>
	<head>
		<meta charset="utf8">
		<link href="styles/style1.css" rel="stylesheet">
		<title>1.1</title>
	</head>
	<body>
		<div class='navigation'>
			<a href='lb1.2.php'>Следующая ></a>
		</div>
		<form method = 'post'>
			<p>A: <input type="text" name="A"></input></p>
			<p>B: <input type="text" name="B"></input></p>
			<p>C: <input type="text" name="C"></input></p>
			<input type="submit" />
		<?php 
			$A = $_POST['A'];
			$B = $_POST['B'];
			$C = $_POST['C'];
			if ($A != 0) {
				$D = $B*$B - 4*$A*$C;
				if ($D > 0) {
					$X1 = (-$B + sqrt($D)) / (2*$A);
					$X2 = (-$B - sqrt($D)) / (2*$A);
					if ($X1 > $X2) {
						$temp = $X1;
						$X1 = $X2;
						$X2 = $temp;
					}
					echo "<p>X<sub>1</sub> = $X1</p><p>X<sub>2</sub> = $X2</p>";
				} else {
					echo "<p>Ошибка! Дискриминант не положителен.</p>";
				}
			} elseif ($A == '' || $B == ""|| $C == "") {
				echo "";
			} else {
				echo "<p>Ошибка! A = 0.</p>";
			}
		?>
		</form>
		<div class='navigation'>
			<a href='index.html'>На главную</a>
		</div>
	</body>
</html>

