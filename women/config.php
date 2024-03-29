<?php

$host = 'localhost';
$mysql_username = 'root';
$mysql_password = '';
$mysql_db = 'womensafety';
// connect to database
$conn = mysql_connect($host, $mysql_username, $mysql_password);
mysql_select_db($mysql_db);

?>