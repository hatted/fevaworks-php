<?php
//mesasge_delete.php
require_once("db.inc.php");

$query="SELECT * FROM message WHERE id = ".$_GET['id'];
$recordset = $mysqli->query($query);
echo "Query return: ".$recordset->num_rows." rows<br>";
$record=mysqli_fetch_array($recordset, MYSQLI_ASSOC);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table>
	<tr>
		<td width="51">id</td>
		<td width="374"><?php echo $record['id']; ?></td>
	</tr>
	<tr>
		<td>message</td>
		<td><?php echo $record['message']; ?></td>
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td><a href="message_delete2.php?id=<?php echo $record['id'];?>">Yes, I want to delete</a></td>
  </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td><a href="message_readall.php">No, I don't want to delete.</a></td>
  </tr>
</table>
</body>
</html>
<?php
$mysqli->close();
?>