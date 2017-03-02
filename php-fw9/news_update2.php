<?php include('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>news_update2</title>
</head>

<body>
<?php
//news_update2.php
date_default_timezone_set('Asia/Hong_Kong');
$createdate=date("Y-m-d H:i:s");

$sql="UPDATE `news` SET `subject` = '".$_POST['subject']."', `description` = '".$_POST['description']."', `createdate` = '$createdate' WHERE `news`.`id` = ".$_POST['id'];
$result=$mysqli->query($query);
if ($result){
	echo "update successfully";
}else{
	echo "update error";	
}
?>
<p><a href="news_readall.php">Readall</a></p>
</body>
</html>
<?php $mysqli->close(); ?>