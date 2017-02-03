<?php include_once('db.inc.php'); ?>
<!doctype html>
<html>
<?php
	include_once('head.inc.php');
?>

<body>
<?php 
//sms_readall.php
$query="SELECT * FROM `sms` ORDER BY `sms`.`id` DESC"; //whole command can copy from SQL webpage
$recordset=$mysqli->query($query); //print all data of $mysqli
mysqli_fetch_all($recordset);  // sort all data
?>


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
foreach($recordset as $record){ //for role all data
	?>
    <tr>
      <td><a href="sms_update.php?id=<?php echo $record['id']; ?>">update</a></td>
      <td><a href="sms_delete.php?id=<?php echo $record['id']; ?>">delete</a></td>
		<td><a href="sms_read.php?id=<?php echo $record['id']; ?>"> <?php echo $record['id']; ?></a></td>
      <td><?php echo $record['message']; ?> </td>
      <td><?php echo $record['createdate']; ?> </td>
    </tr>
<?php
}
?>
  </tbody>
</table>
<p><a href="sms_create.php">Create</a></p>
</body>
</html>