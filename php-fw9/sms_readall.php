<?php
//sms_readall.php
require_once('db.inc.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="sms.css" rel="stylesheet" type="text/css">
</head>

<body>
<p>
  <?php
$sql="SELECT * FROM `sms` ORDER BY `sms`.`id` DESC";
$result=$mysqli->query($sql);
mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
</p>
<p class="btn"><a href="sms_create.php">Create </a></p>
<table width="600" border="1">
  <tbody>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td class="btn">id</td>
      <td class="btn">message</td>
      <td class="btn">createdate</td>
    </tr>
    <?php
foreach($result as $record){
	?>
    <tr>
      <td class="btn"><a href="sms_update.php?id=<?php echo $record['id']; ?>">update</a></td>
      <td class="btn"><a href="sms_delete.php?id=<?php echo $record['id']; ?>">delete</a></td>
		<td class="btn"><a href="sms_read.php?id=<?php echo $record['id']; ?>"><?php echo $record['id']; ?></a></td>
      <td class="btn"><?php echo $record['message']; ?></td>
      <td class="btn"><?php echo $record['createdate']; ?></td>
    </tr>
    <?php
    }
?>
  </tbody>
</table>
</body>
</html>
<?php
$mysqli->close();
?>






