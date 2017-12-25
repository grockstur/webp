<?php
	$findingText = $_POST['findingText'];
	$flaf = 0;
	$msql = mysql_connect("127.0.0.1", "root", "");
	$query = "select * from rivers.river where id like '%$findingText%' or name like '%$findingText%' or length like '%$findingText%' or flowsTo like '%$findingText%' or volume like '%$findingText%' or area like '%$findingText%'";
	$qr_result = mysql_query("$query") or die (mysql_error());
	echo '<div class="row"><br><table id="lb4" border="1"><thead><tr><th>#</th><th>Название</th><th>Протяжённость (км)</th><th>Впадает в</th><th>Годовой сток (км<sup>3</sup>)</th><th>Площадь бассейна (км<sup>2</sup>)</th></tr></thead><tbody>';
	while($data = mysql_fetch_array($qr_result)){
		echo '<tr>';
		echo '<td>' . $data[id] . '</td>';
		echo '<td>' . $data[name] . '</td>';
		echo '<td>' . $data[length] . '</td>';
		echo '<td>' . $data[flowsTo] . '</td>';
		echo '<td>' . $data[volume] . '</td>';
		echo '<td>' . $data[area] . '</td>';
		echo '</tr>';
	}
	echo '</tbody></table></div>';
?>