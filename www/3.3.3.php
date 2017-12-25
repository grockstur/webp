<?php
	if ($_COOKIE["code"] !== '1234566') {
		print "<html><head><title>3.3</title><link href='styles/style1.css' rel='stylesheet'></head><body><p>Ошибка сервера.</p><div class='navigation'><a href='lb3.3.php'>< Назад</a></div></body></html>";
	} else {
		print "<!DOCTYPE html><html><head><title>3.3</title><link href='styles/style1.css' rel='stylesheet'></head><body><p>Добро пожаловать!</p><form action='3.3.4.php'><input type='submit' value='Выйти'></form></body></html>";
	}
?>