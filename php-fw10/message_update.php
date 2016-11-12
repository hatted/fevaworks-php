<?php
//message_update.php
require_once("db.inc.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
if (empty($_POST['message'])){
	//form
	$query="SELECT * FROM message WHERE id = ".$_GET['id'];
	$recordset = $mysqli->query($query);
	$record=mysqli_fetch_array($recordset, MYSQLI_ASSOC);
	//echo '';
	?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="update" id="update">
  <table width="589" border="1">
    <tbody>
      <tr>
        <td width="87">id</td>
        <td width="486"><?php echo $record['id']; ?>
        <input type="hidden" name="id" id="id" value="<?php echo $record['id']; ?>"></td>
      </tr>
      <tr>
        <td>message</td>
        <td><textarea name="message" id="message"><?php echo $record['message']; ?></textarea></td>
      </tr>
      <tr>
        <td>create_date</td>
        <td><?php echo $record['create_date']; ?></td>
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
    <?php
}else{
	//update
	$update="UPDATE message SET message = '"
	.$_POST['message']."',create_date='"
	.date("Y-m-d H:i:s").
	"' WHERE id = ".$_POST['id'];
	echo $update;
	$result = $mysqli->query($update);
	
	if ($result){
		echo "Update successfully<br>";
		echo '<a href="message_readall.php">Back</a>';
	}else{
		echo "Update error";
	}
}



?>


</body>
</html>
<?php
$mysqli->close();
?>