<?php include('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
//sms_delete.php
$query="SELECT * FROM `sms` WHERE id=".$_GET['id'];
$recordset=$mysqli->query($query);
$record=mysqli_fetch_array($recordset, MYSQLI_ASSOC);
?>

<table width="600" border="1">
  <tbody>
    <tr>
      <td width="81">id</td>
      <td width="503"><?php echo $record['id']; ?></td>
    </tr>
    <tr>
      <td>message</td>
      <td><?php echo $record['message']; ?></td>
    </tr>
    <tr>
      <td>createdate</td>
      <td><?php echo $record['createdate']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><a href="sms_delete2.php?id=<?php echo $record['id']; ?>">Yes, I want to delete.</a></td>
    </tr>
  </tbody>
</table>
<p><a href="sms_readall.php">sms_readall.php</a></p>

</body>
</html>
<?php $mysqli->close(); ?>