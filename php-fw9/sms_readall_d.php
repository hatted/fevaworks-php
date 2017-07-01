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

	echo $record['id'];
	echo $record['message'];
	echo $record['createdate'];
	echo "<br>";

<table width="600" border="1">
  <tbody>
    <tr>
      <td>id</td>
      <td>message</td>
      <td>createdate</td>
    </tr>
<?php
foreach($result as $record){
?>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
<?php
}
?>
  </tbody>
</table>
</body>
</html>
<?php
$mysqli->close();
?>
