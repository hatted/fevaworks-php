<?php
require_once("db.inc.php");

$delete="DELETE FROM test WHERE id=1";
$result = $mysqli->query($delete);
if ($result){
	echo "Delete successfully<br>";
}else{
	echo "Delete error<br>";
}

$query="SELECT * FROM test";
$recordset=$mysqli->query($query);
echo "Select returned ".$recordset->num_rows." rows. \n";


$mysqli->close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>