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
$message=$_POST['message'];
date_default_timezone_set('Asia/Hong_Kong');
$createdate=date("Y-m-d H:i:s");
$sql="INSERT INTO `sms` (`id`, `message`, `createdate`) VALUES (NULL, '$message', '$createdate')";
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






