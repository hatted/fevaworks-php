<?php
$db_host="localhost";
$db_username="root";
$db_password="password";
$db_database="test";
$mysqli=new mysqli($db_host, $db_username, $db_password, $db_database);

if ($mysqli->connect_errno){
	die("connect failed: ".$mysqli->connect_error);
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

</body>
</html>