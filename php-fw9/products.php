<?php require_once('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="products.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
//products_readall.php
$query="SELECT * FROM `products` ORDER BY `products`.`id` DESC";
$recordset=$mysqli->query($query);
mysqli_fetch_all($recordset, MYSQLI_ASSOC);
?>



<?php
foreach($recordset as $record){
?>
<a href="product_item.php?id=<?php echo $record['id']; ?>">
<div class="product">
	<div class="product_image">
		<img src="<?php echo $record['image']; ?>" width="100" height="100">
    </div>
	<div class="product_name">
		<?php echo $record['name']; ?>
    </div>
	<div class="product_price">
    	<span class="price_o">$<?php echo $record['price']; ?></span>
		<span>$<?php echo $record['price']; ?></span>
    </div>
</div>
</a>
<?php } ?>

<p>&nbsp;</p>
</body>
</html>
<?php
$mysqli->close();
?>
