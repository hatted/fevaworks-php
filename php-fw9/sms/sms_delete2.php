<?php include_once('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<p>
  <?php 
//sms_deletee2.php ( this php file for receive data)
$id=$_GET['id'];	
$query="DELETE FROM `sms` WHERE `sms`.`id` = $id";
$recordset=$mysqli->query($query); 
if($recordset){
	echo "Delete successfully";
}else{
	echo "Delete fail";
}
  
?>
  
  
</p>
<p><a href="sms_readall.php">Back to sms_readall.php</a></p>
</body>
</html>