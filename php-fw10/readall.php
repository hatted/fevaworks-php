<?php
require_once("db.inc.php");

$query="SELECT * FROM test ORDER BY id DESC";
$recordset = $mysqli->query($query);
echo "Query return: ".$recordset->num_rows." rows<br>";
//mysqli_fetch_all($recordset, MYSQLI_ASSOC);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1><a href="insert.php">Insert</a></h1>
<table>
	<tr>
		<td></td>
		<td></td>
		<td>id</td>
		<td>message</td>
	</tr>
    <?php
	//foreach ($recordset as $record){
	while ($record=mysqli_fetch_array($recordset, MYSQLI_ASSOC)){
		echo '
	<tr>
		<td><a href="update.php?id='. $record['id'] .'">update</a></td>
		<td><a href="delete.php?id='. $record['id'] .'">delete</a></td>
		<td><a href="read.php?id='. $record['id'] .'">'. $record['id'] .'</a></td>
		<td>'. $record['message'] .'</td>
	</tr>';
	}
	?>
</table>
</body>
</html>
<?php
$mysqli->close();
?>