<html>
	<head>
		<meta charset="utf8">
		<link href="styles/style1.css" rel="stylesheet">
		<title>2.1</title>
	</head>
	<body>
		<div class='navigation'>
			<a href='lb2.2.php'>Следующая ></a>
		</div>
		<form method = 'post'>
			<p>ФИО: <input type="text" name="FIO"></input></p>
			<p>Телефон: <input type="text" name="phone"></input></p>
			<p>E-mail: <input type="text" name="email"></input></p>
			<p>Адрес:</p>
			<p><textarea name="adress" style="width: 30%; height: 15%;"></textarea></p>

			<p>Выберите интересующее Вас направление:</p>
			<p><select size="1" name="dir">
				<option value="оборудование для общепита">оборудование для общепита</option>
				<option value="оборудование для дома">оборудование для дома</option>
				<option value="промышленное оборудование">промышленное оборудование</option>
			</select></p>

			<p>Выберите интересующую Вас группу оборудование:</p>
			<p><select size="1" name="group">
				<option value="группа 1">группа 1</option>
				<option value="группа 2">группа 2</option>
				<option value="группа 3">группа 3</option>
			</select></p>

			<p>Укажите наименование: <input type="text" name="nname"></input></p>
			<p>Укажите модель: <input type="text" name="model"></input></p>
			<p>Укажите количество: <input type="text" name="count"></input></p>
			<p>Комментарий: <textarea name="comm" style="width: 30%; height: 15%;"></textarea></p>

			<input type="submit"/>
			<button type="reset">Очистить форму</button>
		</form>
		<?php 
			$fio = $_POST['FIO'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$adress = $_POST['adress'];
			$dir = $_POST['dir'];
			$group = $_POST['group'];
			$nname = $_POST['nname'];
			$model = $_POST['model'];
			$count = $_POST['count'];
			$comm = $_POST['comm'];
			$return = "<form><h1>Заявка на получение оборудования</h1><hr><p>от: $fio</p><p>тел.: $phone</p><p>E-mail: $email</p><p>Адрес: $adress</p><hr><p>Тип оборудования: $dir, $group.</p><p>Наименование: $nname.</p><p>Модель: $model.</p><p>В количестве: $count экземпляр(ов).</p><p>Комментарий к заявке: '$comm'</p><hr></form>";
			echo $return;
		?>
		<div class='navigation'>
			<a href='index.html'>На главную</a>
		</div>
	</body>
</html>

