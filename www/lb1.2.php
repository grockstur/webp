<html>
	<head>
		<meta charset="utf-8">
		<link href="styles/style1.css" rel="stylesheet">
		<title>1.2</title>
	</head>
	<body>
		<div class='navigation'>
			<a href='lb1.1.php'>< Предыдущая</a>
			<a href='lb1.3.php'>Следующая ></a>
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
			if($A == '' || $B == ""|| $C == "") {
				echo "";
			} else {
				if ($A <= $B && $A <= $C) {
					$res = $B + $C;	
				} elseif ($B <= $A && $B <= $C) {
					$res = $A + $C;
				} else {
					$res = $A + $B;
				}
				echo "<p>Sum = $res</p>";
			}
		?>
		</form>
		<div class='navigation'>
			<a href='index.html'>На главную</a>	
		</div>
	</body>
</html>