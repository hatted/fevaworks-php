<?php
//db.inc.php
$db_host="localhost";
$db_username="root";
$db_password="password";
$db_password="";
$db_database="test";
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_database);

if ($mysqli->connect_errno) {
	die("Connect failed: ". $mysqli->connect_error."<br>");
}else{
	print_r($mysqli);
}

?>