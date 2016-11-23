<?php include('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>news_delete2</title>
</head>

<body>
<?php
//news_delete2.php
$query="DELETE FROM `news` WHERE `news`.`id` = ".$_GET['id'];
$result=$mysqli->query($query);
if ($result){
	echo "delete successfully";
}else{
	echo "delete error";	
}
?>
<p><a href="news_readall.php">Readall</a></p>

</body>
</html>
<?php $mysqli->close(); ?>