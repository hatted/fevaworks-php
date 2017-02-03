<?php include_once('db.inc.php'); ?>
<!doctype html>
<html>
<?php
	include_once('head.inc.php');
?>

<body>
<p>
  <?php 
//sms_create2.php ( this php file for receive data)
date_default_timezone_set('Asia/Hong_Kong'); //set HK time zoon
$createdate=date("Y-m-d H:i:s");
$message=$_POST['message'];
	
$query="INSERT INTO `sms` (`id`, `message`, `createdate`) VALUES (NULL, '$message', '$createdate')";
$recordset=$mysqli->query($query); 
if($recordset){
	echo "Create successfully";
}else{
	echo "Create fail";
}
  
?>
  
  
</p>
<p><a href="sms_readall.php">Back to sms_readall.php</a></p>
</body>
</html>