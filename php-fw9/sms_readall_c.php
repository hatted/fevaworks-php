<?php
//sms_readall.php
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
$sql="SELECT * FROM `sms`";
$result=$mysqli->query($sql);
mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<?php
foreach($result as $record){
	echo $record['id'];
	echo $record['message'];
	echo $record['createdate'];
	echo "<br>";
}
?>
</body>
</html>
<?php
$mysqli->close();
?>






