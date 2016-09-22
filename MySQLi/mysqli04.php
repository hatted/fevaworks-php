<?php
$db_host="localhost";
$db_username="root";
$db_password="password";
$db_database="test";
$mysqli = @new mysqli($db_host, $db_username, $db_password, $db_database);

if ($mysqli->connect_errno) {
	die("Connect failed: ". $mysqli->connect_error."<br>");
}else{
	print_r($mysqli);
}

$query="SELECT * FROM test";
if ($recordset=$mysqli->query($query)){
	echo "Select returned ".$recordset->num_rows." rows. \n";
}

$mysqli->close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>