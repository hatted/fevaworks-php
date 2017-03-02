<?php require_once('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
//sms_readall.php
$sql="SELECT * FROM `sms`";
$recordset=$mysqli->query($query);
mysqli_fetch_all($recordset, MYSQLI_ASSOC);
?>

<?php
foreach($recordset as $record){
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
