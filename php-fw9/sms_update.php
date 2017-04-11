<?php
//sms_update.php
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
$id=$_GET['id'];
$sql="SELECT * FROM `sms` WHERE `id` = $id";
$result=$mysqli->query($sql);
mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<form action="sms_update_sql.php" method="post" name="form1" id="form1">
  <p>
<?php
foreach($result as $record){
?>
    <label for="message">Message:</label>
    <input name="id" type="hidden" id="id" value="<?php echo $record['id']; ?>">
    <textarea name="message" id="message"><?php echo $record['message']; ?></textarea>
<?php
}
?>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit">
    <input type="reset" name="reset" id="reset" value="Reset">
  </p>
</form>
</body>
</html>
<?php
$mysqli->close();
?>






