<?php require_once('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>news_create</title>
</head>

<body>
<p>
  <?php
//news_create.php
date_default_timezone_set('Asia/Hong_Kong');
$createdate=date("Y-m-d H:i:s");

$sql="INSERT INTO `news` (`id`, `subject`, `description`, `createdate`) VALUES (NULL, '".$_POST['subject']."', '".$_POST['description']."', '$createdate')";
$result=$mysqli->query($query);
if($result){
	echo "Insert Successfully";
}else{
	echo "Insert error";
}
?>
  
</p>
<p><a href="news_readall.php">Readall</a></p>
</body>
</html>
<?php
$mysqli->close();
?>
