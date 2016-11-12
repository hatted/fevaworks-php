<?php
//insert.php
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
	echo '';
	?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="insert" id="insert">
  <table width="589" border="1">
    <tbody>
      <tr>
        <td width="87">id</td>
        <td width="486">&nbsp;</td>
      </tr>
      <tr>
        <td>message</td>
        <td><textarea name="message" id="message"></textarea></td>
      </tr>
      <tr>
        <td>create_date</td>
        <td>&nbsp;</td>
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
	//insert
	$insert="INSERT INTO message(message, create_date) VALUES('"
	.$_POST['message']."','"
	.date("Y-m-d H:i:s").
	"')";
	echo $insert;
	$result = $mysqli->query($insert);
	
	if ($result){
		echo "Insert successfully";
	}else{
		echo "Insert error";
	}
}



?>


</body>
</html>
<?php
$mysqli->close();
?>