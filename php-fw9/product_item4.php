<?php require_once('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="products.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
//product.php
$query="SELECT * FROM `products` WHERE id=".$_GET['id'];
$recordset=$mysqli->query($query);
mysqli_fetch_all($recordset, MYSQLI_ASSOC);
?>

<table width="800" border="1">
  <tbody>
<?php
foreach($recordset as $record){
?>
    <tr>
      <td width="174">id</td>
      <td width="610"><?php echo $record['id']; ?></td>
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
      <td>
      <span class="price_o">$<?php $price_o=$record['price']*1.1; echo $price_o; ?></span>
      <span class="price_n">$<?php echo $record['price']; ?></span>
      </td>
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
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online">
</form>

      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<p><a href="products.php">Products list</a></p>
</body>
</html>
<?php
$mysqli->close();
?>
