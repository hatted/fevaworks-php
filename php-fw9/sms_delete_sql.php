<?php
//sms_delete_sql.php
require_once('db.inc.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$id=$_GET['id'];
$sql="DELETE FROM `sms` WHERE `sms`.`id` = $id";
$result=$mysqli->query($sql);
	
if ($result){
	echo "DELETE successfully";
}else{
	echo "DELETE fail";
}
?>
<p><a href="sms_readall.php">Back to read all</a></p>
</body>
</html>
<?php
$mysqli->close();
?>






