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
$message=$_POST['message'];
date_default_timezone_set('Asia/Hong_Kong');
$createdate=date("Y-m-d H:i:s");
$sql="UPDATE `sms` SET `message` = 'bbbbb', `createdate` = '2017-05-29 15:38:33' WHERE `sms`.`id` = 15";
$result=$mysqli->query($sql);
	
if ($result){
	echo "UPDATE successfully";
}else{
	echo "UPDATE fail";
}
?>
<p><a href="sms_readall.php">Back to read all</a></p>
</body>
</html>
<?php
$mysqli->close();
?>





