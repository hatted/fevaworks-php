<?php
//sms_read.php
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
$id=$_GET['id'];
$sql="SELECT * FROM `sms` WHERE `id` = $id";
$result=$mysqli->query($sql);
mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<p><a href="sms_readall.php">Back to read all</a></p>
</body>
</html>
<?php
$mysqli->close();
?>






