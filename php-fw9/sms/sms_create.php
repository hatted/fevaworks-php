<?php include_once('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
//sms_create.php (this php file for input data)
	
	
?>
<form action="sms_create2.php" method="post" name="form1" id="form1">
  <p>
    <label for="message">message:</label>
    <input type="text" name="message" id="message">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit">
    <input type="reset" name="reset" id="reset" value="Reset">
  </p>
</form>
</body>
</html>