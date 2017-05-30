<?php
//sms_create_sql.php
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
$sql="INSERT INTO `sms` (`id`, `message`, `createdate`) VALUES (NULL, 'aaa', '2017-05-29 00:00:00')";
$result=$mysqli->query($sql);
	
if ($result){
	echo "Insert successfully";
}else{
	echo "Insert fail";
}
?>
<p><a href="sms_readall.php">Back to read all</a></p>
</body>
</html>
<?php
$mysqli->close();
?>






