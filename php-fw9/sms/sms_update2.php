<?php include_once('db.inc.php'); ?>
<!doctype html>
<html>
<?php
	include_once('head.inc.php');
?>

<body>
<p>
  <?php 
//sms_update2.php ( this php file for receive data)
date_default_timezone_set('Asia/Hong_Kong'); //set HK time zoon
$createdate=date("Y-m-d H:i:s");
$message=$_POST['message'];
	
$id=$_GET['id'];	
$query="UPDATE `sms` SET `message` = '$message', `createdate` = '$createdate' WHERE `sms`.`id` = $id";
$recordset=$mysqli->query($query); 
if($recordset){
	echo "Update successfully";
}else{
	echo "Update fail";
}
  
?>
  
  
</p>
<p><a href="sms_readall.php">Back to sms_readall.php</a></p>
</body>
</html>