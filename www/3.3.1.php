<?php
	$login = $_POST["login"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	if ($login !== 'grockstur' || $password !== '1111' || $email !== 'turin@mail.ru') {
		header('Location: 3.3.2.php');
	}
	else {
		setcookie("code", 1234566);
		header('Location: 3.3.3.php');
	}
?>