<?php
//message_delete2.php
require_once("db.inc.php");
if (empty($_GET['id'])){
	echo "No id";
}else{
	$delete="DELETE FROM message WHERE id=".$_GET['id'];
	$result = $mysqli->query($delete);
	if ($result){
		echo "deleted successfully";
	}else{
		echo "delete error";
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<a href="message_readall.php">Back </a>
</body>
</html>