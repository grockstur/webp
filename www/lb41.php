<?php
	$name = $_POST['name'];
	$length = $_POST['length'];
	$flowsTo = $_POST['flowsTo'];
	$volume = $_POST['volume'];
	$area = $_POST['area'];
	$msql = mysql_connect("127.0.0.1", "root", "");
	$query = "insert into rivers.river values (NULL, '$name', '$length', '$flowsTo', '$volume', '$area')";
	$qr_result = mysql_query("$query") or die (mysql_error());
?>