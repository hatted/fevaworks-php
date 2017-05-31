<?php
//products_readone.php
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
$sql="SELECT * FROM `products` WHERE `id` = $id";
$result=$mysqli->query($sql);
mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<table width="600" border="1">
  <tbody>
<?php
foreach($result as $record){
?>
    <tr>
      <td width="83">id</td>
      <td width="501"><?php echo $record['id']; ?></td>
    </tr>
    <tr>
		<td>name</td>
      <td><?php echo $record['name']; ?></td>
    </tr>
    <tr>
      <td>supplier</td>
      <td><?php echo $record['supplier']; ?></td>
    </tr>
    <tr>
      <td>description</td>
      <td><?php echo $record['description']; ?></td>
    </tr>
    <tr>
      <td>price</td>
      <td>$<?php echo $record['price']; ?></td>
    </tr>
    <tr>
      <td>image</td>
      <td><img src="<?php echo $record['image']; ?>"></td>
    </tr>
    <tr>
      <td>createdate</td>
      <td><?php echo $record['createdate']; ?></td>
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
<input type="hidden" name="currency_code" value="HKD">
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
<p><a href="products_readall.php">Back to read all</a></p>
</body>
</html>
<?php
$mysqli->close();
?>






