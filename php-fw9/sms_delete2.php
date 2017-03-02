<?php include('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
//sms_delete2.php
$sql="DELETE FROM `sms` WHERE `sms`.`id` = ".$_GET['id'];
$result=$mysqli->query($query);
if ($result){
	echo "delete successfully";
}else{
	echo "delete error";	
}
?>
</body>
</html>
<?php $mysqli->close(); ?>