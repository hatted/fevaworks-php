<?php include('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
//sms_update2.php
date_default_timezone_set('Asia/Hong_Kong');
$createdate=date("Y-m-d H:i:s");

$query="UPDATE `sms` SET `message` = '".$_POST['message']."', `createdate` = '$createdate' WHERE `sms`.`id` = ".$_POST['id'];
$result=$mysqli->query($query);
if ($result){
	echo "update successfully";
}else{
	echo "update error";	
}
?>
</body>
</html>
<?php $mysqli->close(); ?>