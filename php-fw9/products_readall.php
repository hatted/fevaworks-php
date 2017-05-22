<?php
include_once("db.inc.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="sms.css" rel="stylesheet" type="text/css">
<link href="products.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
//products_readall.php
$sql="SELECT * FROM `products` ORDER BY `products`.`id` DESC";
$recordset=$mysqli->query($sql);
mysqli_fetch_all($recordset, MYSQLI_ASSOC);
?>

      <td></a></td>


div.products_list>div.product>a>div.product_image+div.product_name+div.product_price
<div class="products_list">
<?php
foreach($recordset as $record){
?>
	<div class="product">
		<a href="products_details.php?id=<?php echo $record['id']; ?>">
			<div class="product_image">
				<img src="<?php echo $record['image']; ?>" width="100" height="100">
			</div>
			<div class="product_name">
				<?php echo $record['name']; ?>
			</div>
			<div class="product_price">
				$<?php echo $record['price']; ?>
			</div>
		</a></div>
<?php
}
?>
</div>

<p>&nbsp;</p>
<p><a href="create.html">Create</a></p>
</body>
</html>
<?php
$mysqli->close();
?>



