<?php include_once('db.inc.php'); ?>
<!doctype html>
<html>
<?php
	include_once('head.inc.php');
?>

<body>
<?php 
//sms_readall.php
$id=$_GET['id']; //$id = get sms_readall file\record_id
$query="SELECT * FROM `sms` WHERE id=$id"; 
$recordset=$mysqli->query($query);
mysqli_fetch_all($recordset);  
?>


<table width="600" border="1">
  <tbody>
    <tr>
      <td>id</td>
      <td>message</td>
      <td>createdate</td>
    </tr>
    <?php
foreach($recordset as $record){ //for role all data
	?>
    <tr>
		<td><?php echo $record['id']; ?> </td>
      <td><?php echo $record['message']; ?> </td>
      <td><?php echo $record['createdate']; ?> </td>
    </tr>
<?php
}
?>
  </tbody>
</table>
<p><a href="sms_delete2.php?id=<?php echo $record['id']; ?>">Yes, I want to delete.</a></p>
<p><a href="sms_readall.php">Readll.php</a></p>
</body>
</html>