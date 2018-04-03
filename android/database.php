<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "db_cilacap";
mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($db_name) or die (mysql_error());
?>