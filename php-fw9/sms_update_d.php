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
    <label for="message">Message:</label>
    <textarea name="message" cols="50" rows="5" id="message"><?php
foreach($result as $record){
	echo $record['message'];
}
?>
    </textarea>
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






