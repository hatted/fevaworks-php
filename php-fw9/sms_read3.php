<?php require_once('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
//sms_read.php
$sql="SELECT * FROM `sms` WHERE id=".$_GET['id'];
$recordset=$mysqli->query($query);
mysqli_fetch_all($recordset, MYSQLI_ASSOC);
?>

<table width="800" border="1">
  <tbody>
<?php
foreach($recordset as $record){
?>
    <tr>
      <td>id</td>
      <td><?php echo $record['id']; ?></td>
    </tr>
    <tr>
      <td>message</td>
      <td><?php echo $record['message']; ?></td>
    </tr>
    <tr>
      <td>createdate</td>
      <td><?php echo $record['createdate']; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<p><a href="sms_readall.php">Readall</a></p>
</body>
</html>
<?php
$mysqli->close();
?>
