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
$sql="SELECT * FROM `sms` WHERE `id` = 3";
$result=$mysqli->query($sql);
mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

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
		<td><a href="sms_read.php?id=<?php echo $record['id']; ?>"><?php echo $record['id']; ?></a></td>
      <td><?php echo $record['message']; ?></td>
      <td><?php echo $record['createdate']; ?></td>
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






