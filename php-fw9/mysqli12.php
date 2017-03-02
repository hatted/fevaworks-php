<?php
require_once("db.inc.php");

$update="UPDATE test SET message = 'I am great' WHERE id=3";
$result = $mysqli->query($update);
if ($result){
	echo "Update successfully<br>";
}else{
	echo "Update error<br>";
}

$sql="SELECT * FROM test";
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