<?php
//sms_delete.php
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

<table width="600" border="1">
  <tbody>
    <tr>
      <td>id</td>
      <td>message</td>
      <td>createdate</td>
    </tr>
    <?php
foreach($result as $record){
	?>
    <tr>
		<td><?php echo $record['id']; ?></td>
      <td><?php echo $record['message']; ?></td>
      <td><?php echo $record['createdate']; ?></td>
    </tr>
    <?php
    }
?>
  </tbody>
</table>
<p><a href="sms_delete_sql.php?id=<?php echo $record['id']; ?>">Yes, I want to delete.</a></p>
<p><a href="sms_readall.php">Back to read all</a></p>
</body>
</html>
<?php
$mysqli->close();
?>






