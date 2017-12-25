<html>
	<head>
		<meta charset="utf8">
		<link href="styles/bootstrap.min.css" rel="stylesheet">
		<link href="styles/style1.css" rel="stylesheet">
		<title>4.2</title>
	</head>
	<body>
		<br>
		<div class='container'>
			<?php
				$msql = mysql_connect("127.0.0.1", "root", "");
				$query = 'select * from rivers.river';
				$qr_result = mysql_query("$query") or die (mysql_error());
				echo '<div class="row"><h3>Реки</h3><table id="lb4" border="1"><thead><tr><th>#</th><th>Название</th><th>Протяжённость (км)</th><th>Впадает в</th><th>Годовой сток (км<sup>3</sup>)</th><th>Площадь бассейна (км<sup>2</sup>)</th></tr></thead><tbody>';
				while($data = mysql_fetch_array($qr_result)){
					echo '<tr>';
					echo '<td>' . $data[id] . '</td>';
					echo '<td>' . $data[name] . '</td>';
					echo '<td>' . $data[length] . '</td>';
					echo '<td>' . $data[flowsTo] . '</td>';
					echo '<td>' . $data[volume] . '</td>';
					echo '<td>' . $data[area] . '</td>';
					echo '<td id="buttons_td"><button type="button" class="btn btn-primary edit_btn1">Edit</button><button type="button" class="btn btn-danger del_btn1">Del</button></td>';
					echo '</tr>';
				}
				echo '</tbody></table></div><div class="row"><button type="button" class="btn btn-success" id="add_btn_41">Добавить</button></div><div class="row"><div class="col-md-offset-5 col-md-2"><button type="button" class="btn btn-info" id="find_btn">Поиск</div></div>';
				mysql_close($msql);
			?>
		</div>
		<div class='navigation'>
			<a href='index.html'>На главную</a>
		</div>
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/logic.js"></script>
	</body>
</html>