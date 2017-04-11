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
$sql="";
$result=$mysqli->query($sql);
?>
<p><a href="sms_readall.php">Back to read all</a></p>
</body>
</html>
<?php
$mysqli->close();
?>






