<?php
//sms_create.php
require_once('db.inc.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="sms_create_sql.php" method="post" name="form1" id="form1">
  <p>
    <label for="message">Message:</label>
    <textarea name="message" cols="50" rows="5" id="message"></textarea>
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






