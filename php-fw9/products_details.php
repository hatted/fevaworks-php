<?php
//include once only. subsequent include will be ignored. prevent multiple database access
include_once("db.inc.php");
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php	
//products_details.php
$sql="SELECT * FROM `products` WHERE id = ".$_GET['id'];
	
//recordset is all the data
$recordset=$mysqli->query($sql);
	
//MYSQL_ASSOC is a constant
mysqli_fetch_all($recordset, MYSQL_ASSOC);	
?>


<table width="600" border="1">
  <tbody>
    <?php
	foreach($recordset as $record){
	?>
    <tr>
      <td>name</td>
      <td><?php echo $record['name']; ?></td>
    </tr>
    <tr>
      <td>description</td>
      <td><?php echo $record['description']; ?></td>
    </tr>
    <tr>
      <td>image</td>
      <td><img src="<?php echo $record['image']; ?>" width="100" height="100"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_xclick">
  <input type="hidden" name="business" value="raymond@zaturday.com">
  <input type="hidden" name="item_name" value="<?php echo $record['name']; ?>">
  <input type="hidden" name="item_number" value="<?php echo $record['id']; ?>">
  <input type="hidden" name="amount" value="<?php echo $record['price']; ?>">
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online">
</form>
	
   </td>
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