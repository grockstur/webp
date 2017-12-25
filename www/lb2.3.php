<html>
	<head>
		<meta charset="utf8">
		<link href="styles/style1.css" rel="stylesheet">
		<title>2.3</title>
	</head>
	<body>
		<div class='navigation'>
			<a href='lb2.2.php'>< Предыдущая</a>
		</div>
		<form method = 'post'>
			<p>Фамилия: <input type="text" name="lastname"></input></p>
			<p>Имя: <input type="text" name="name"></input></p>
			<p>Возраст: <input type="text" name="age"></input></p>
			<p>E-mail: <input type="text" name="email"></input></p>
			<input type="submit"/>

		<?php
			$email = $_POST['email'];
			$lastname = $_POST['lastname'];
			$name = $_POST['name'];
			$age = (int) $_POST['age'];
			$mailtext = "Фамилия: $lastname; Имя: $name; Возраст: $age лет.";
			mail($email, "Данные из формы", $mailtext);
		?>
		
		</form>

		<div class='navigation'>
			<a href='index.html'>На главную</a>
		</div>
	</body>
</html>

