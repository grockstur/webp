<?php
	$id = $_POST['editingId'];
	$name = $_POST['name'];
	$length = $_POST['length'];
	$flowsTo = $_POST['flowsTo'];
	$volume = $_POST['volume'];
	$area = $_POST['area'];
	$msql = mysql_connect("127.0.0.1", "root", "");
	$query = "update rivers.river set name = '$name', length = '$length', flowsTo = '$flowsTo', volume = '$volume', area = '$area' where id = '$id'";
	$qr_result = mysql_query("$query") or die (mysql_error());
?>