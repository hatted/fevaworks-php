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
$query="INSERT INTO `sms` (`id`, `message`, `createdate`) VALUES (NULL, 'test', '0000-00-00 00:00:00')";
$result=$mysqli->query($query);
if($result){
	echo "Insert Successfully";
}else{
	echo "Insert error";
}
?>
  
</p>
<p>&nbsp;</p>
</body>
</html>
<?php
$mysqli->close();
?>
