<?php
$mysql_host = "localhost";
$mysql_port = "8888";
$mysql_user = "root";	# ID
$mysql_password = "DB_password";	# PW
$mysql_db = "user_db";			# DB name

$dbconn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db, $mysql_port) or die("DB connect failed.");
?>
