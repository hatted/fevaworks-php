<?php
require_once("db.inc.php");

$query="SELECT * FROM test WHERE id = ".$_GET['id'];
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
		<td>id</td>
		<td><?php echo $record['id']; ?></td>
	</tr>
	<tr>
		<td>message</td>
		<td><?php echo $record['message']; ?></td>
	</tr>
</table>
</body>
</html>
<?php
$mysqli->close();
?>