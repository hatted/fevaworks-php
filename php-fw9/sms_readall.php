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
$sql="SELECT * FROM `sms` ORDER BY `sms`.`id` DESC";
$recordset=$mysqli->query($query);
mysqli_fetch_all($recordset, MYSQLI_ASSOC);
?>


<table width="800" border="1">
  <tbody>
    <tr>
      <td></td>
      <td></td>
      <td>id</td>
      <td>message</td>
      <td>createdate</td>
    </tr>
<?php
foreach($recordset as $record){
?>
    <tr>
      <td><a href="sms_update.php?id=<?php echo $record['id']; ?>">update</a></td>
      <td><a href="sms_delete.php?id=<?php echo $record['id']; ?>">delete</a></td>
      <td><a href="sms_read.php?id=<?php echo $record['id']; ?>"><?php echo $record['id']; ?></a></td>
      <td><?php echo $record['message']; ?></td>
      <td><?php echo $record['createdate']; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<p><a href="sms_create.html">Create</a></p>
</body>
</html>
<?php
$mysqli->close();
?>
