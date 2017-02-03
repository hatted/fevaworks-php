<?php include_once('db.inc.php'); ?>
<!doctype html>
<html>
<?php
	include_once('head.inc.php');
?>

<body>
<?php 
//sms_update.php (this php file for input data)
$id=$_GET['id']; //$id = get sms_readall file\record_id
$query="SELECT * FROM `sms` WHERE id=$id"; 
$recordset=$mysqli->query($query);
$record=mysqli_fetch_array($recordset, MYSQLI_ASSOC);  
?>

<form action="sms_update2.php?id=<?php echo $id; ?>" method="post" name="form1" id="form1">
  <p>
    <label for="message">message:</label>
    <input name="message" type="text" id="message" value="<?php echo $record['message']; ?>">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit">
    <input type="reset" name="reset" id="reset" value="Reset">
  </p>
</form>
</body>
</html>