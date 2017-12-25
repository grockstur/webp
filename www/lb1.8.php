<html>
	<head>
		<meta charset="utf8">
		<link href="styles/style1.css" rel="stylesheet">
		<title>1.8</title>
	</head>
	<body>
		<div class='navigation'>
			<a href='lb1.7.php'>< Предыдущая</a>
			<a href='lb1.9.php'>Следующая ></a>
		</div>
		<form method = 'post'>
			<p>A: <input type="text" name="A"></input></p>
			<p>B: <input type="text" name="B"></input></p>
			<p>C: <input type="text" name="C"></input></p>
			<p>D: <input type="text" name="D"></input></p>
			<p>E: <input type="text" name="E"></input></p>
			<input type="submit" />
		<p> 
		<?php 
			$A = (float) $_POST['A'];
			$B = (float) $_POST['B'];
			$C = (float) $_POST['C'];
			$D = (float) $_POST['D'];
			$E = (float) $_POST['E'];
			if ($A == '' || $B == '' || $C == '' || $D == '' || $E == ''){
				echo "";
			} else {
				function PowerA3 ($A)
				{
					$B = $A * $A * $A;
					return $B;
				}
				$A = PowerA3($A);
				$B = PowerA3($B);
				$C = PowerA3($C);
				$D = PowerA3($D);
				$E = PowerA3($E);
				print("<p>$A</p>");
				print("<p>$B</p>");
				print("<p>$C</p>");
				print("<p>$D</p>");
				print("<p>$E</p>");
			}
		?>
		</p>
		</form>
		<div class='navigation'>
			<a href='index.html'>На главную</a>
		</div>
	</body>
</html>