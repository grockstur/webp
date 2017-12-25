<html>
	<head>
		<meta charset="utf8">
		<link href="styles/style1.css" rel="stylesheet">
		<title>1.10</title>
	</head>
	<body>
		<div class='navigation'>
			<a href='lb1.9.php'>< Предыдущая</a>
		</div>
		<form method = 'post'>
			<p>S: <input type="text" name="Str"></input></p>
			<input type="submit" />
		<p> 
		<?php 
			$Str = (string) $_POST['Str'];
			$pos1 = strpos($Str, " ");
    		$pos2 = strrpos($Str, " ");
    		if ($pos1 == $pos2) {
    			echo "";
    		} else {
    			echo substr($Str, $pos1, $pos2-$pos1);
    		}
		?>
		</p>
		</form>
		<div class='navigation'>
			<a href='index.html'>На главную</a>
		</div>
	</body>
</html>