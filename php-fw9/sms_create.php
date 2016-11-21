<?php include('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
//sms_create.php
date_default_timezone_set('Asia/Hong_Kong');
$createdate=date("Y-m-d H:i:s");

$query="INSERT INTO `sms` (`id`, `message`, `createdate`) VALUES (NULL, '".$_POST['message']."', '$createdate')";
$result=$mysqli->query($query);
if ($result){
	echo "insert successfully";
}else{
	echo "insert error";	
}
?>
</body>
</html>
<?php $mysqli->close(); ?>