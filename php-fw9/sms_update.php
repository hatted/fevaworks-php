<?php include('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<p>
  <?php
//sms_update.php
$sql="SELECT * FROM `sms` WHERE id=".$_GET['id'];
$recordset=$mysqli->query($query);
$record=mysqli_fetch_array($recordset, MYSQLI_ASSOC);
?>
</p>
<form action="sms_update2.php" method="post" name="form1" id="form1">
  <table width="600" border="1">
    <tbody>
      <tr>
        <td width="186">id</td>
        <td width="398"><?php echo $record['id']; ?>
        <input type="hidden" name="id" id="id" value="<?php echo $record['id']; ?>"></td>
      </tr>
      <tr>
        <td>message</td>
        <td>
        <input value="<?php echo $record['message']; ?>" type="text" name="message" id="message"></td>
      </tr>
      <tr>
        <td>createdate</td>
        <td><?php echo $record['createdate']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="Submit">
        <input type="reset" name="reset" id="reset" value="Reset"></td>
      </tr>
    </tbody>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
<p><a href="sms_readall.php">sms_readall.php</a></p>
</body>
</html>
<?php $mysqli->close(); ?>