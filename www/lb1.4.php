<html>
	<head>
		<meta charset="utf8">
		<link href="styles/style1.css" rel="stylesheet">
		<title>1.4</title>
	</head>
	<body>
		<div class='navigation'>
			<a href='lb1.3.php'>< Предыдущая</a>
			<a href='lb1.5.php'>Следующая ></a>
		</div>
		<form method = 'post'>
			<p>A: <input type="text" name="A"></input></p>
			<p>B: <input type="text" name="B"></input></p>
			<input type="submit" />
		<p> 
		<?php 
			$A = (int) $_POST['A'];
			$B = (int) $_POST['B'];
			if ($A == '' || $B == ''){
				echo "";
			} elseif ($A >= $B) {
				echo "Ошибка! A >= B.";
			} else {
				$res = 0;
				for($i=$A; $i<=$B; $i++) {
					$res += $i*$i;
				}
				echo "$res";
			}
		?>
		</p>
		</form>
		<div class='navigation'>
			<a href='index.html'>На главную</a>
		</div>
	</body>
</html>