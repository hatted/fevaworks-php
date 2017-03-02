<?php require_once('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<p>
  <?php
//sms_create.php
date_default_timezone_set('Asia/Hong_Kong');
$createdate=date("Y-m-d H:i:s");

$sql="INSERT INTO `sms` (`id`, `message`, `createdate`) VALUES (NULL, '".$_POST['message']."', '$createdate')";
$result=$mysqli->query($query);
if($result){
	echo "Insert Successfully";
}else{
	echo "Insert error";
}
?>
  
</p>
<p><a href="sms_readall.php">Readall</a></p>
</body>
</html>
<?php
$mysqli->close();
?>
