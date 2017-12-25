<?php
	$id = $_POST['id'];
	$msql = mysql_connect("127.0.0.1", "root", "");
	$query = "delete from rivers.river where id=$id";
	$qr_result = mysql_query("$query") or die (mysql_error());
?>