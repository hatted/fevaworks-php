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
<p>
  <?php
$sql="SELECT * FROM `sms`";
$result=$mysqli->query($sql);
mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
</p>
<p><a href="sms_create.php">Create </a></p>
<table width="600" border="1">
  <tbody>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>id</td>
      <td>message</td>
      <td>createdate</td>
    </tr>
    <?php
foreach($result as $record){
	?>
    <tr>
      <td><a href="sms_update.php">update</a></td>
      <td><a href="sms_delete.php?id=<?php echo $record['id']; ?>">delete</a></td>
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






