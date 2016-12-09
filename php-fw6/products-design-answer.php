<?php
//products-design.php
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Products</title>
<link href="products.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include('header.inc.php'); ?>
<?php include('products-array.inc.php'); ?>
.products_list>.product>.product_image+.product_name+product_price
<div class="products_list">
	<?php
		for ($i=1; $i<=count($name);$i++){
	?>
	<div class="product">
		<div class="product_image"><img src="<?php echo $image[$i]; ?>"  width="100" height="100"></div>
		<div class="product_name"><?php echo $name[$i]; ?></div>
		<div class="product_price">$<?php echo $price[$i]; ?></div>
	</div>
	<?php
		}
	?>
</div>
</body>
</html>