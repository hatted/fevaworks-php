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
$sql="";
$result=$mysqli->query($sql);
mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

</body>
</html>
<?php
$mysqli->close();
?>






