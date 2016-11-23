<?php
//db.php
$db_hostname="localhost";
$db_username="root";
$db_password="password";
$db_database="test";
$mysqli=new MySQLi($db_hostname,$db_username,$db_password,$db_database);

if($mysqli->connect_errno>0){
	die("Connect fail: ".$mysqli->connect_error);
}else{
	//print_r($mysqli);
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
<?php
$mysqli->close();
?>
