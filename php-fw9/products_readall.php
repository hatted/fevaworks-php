<?php
//products_readall.php
require_once('db.inc.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="products.css" rel="stylesheet" type="text/css">
</head>

<body>
<p>
  <?php
$sql="SELECT * FROM `products` ORDER BY `products`.`id` DESC";
$result=$mysqli->query($sql);
mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
</p>

<div class="products_list">
<?php
foreach($result as $record){
?>
<a href="products_readone.php?id=<?php echo $record['id']; ?>">
	<div class="product">
		<div class="product_image">
			<img src="<?php echo $record['image']; ?>" width="100" height="100">
		</div>
		<div class="product_name"><?php echo $record['name']; ?></div>
		<div class="product_price">$<?php echo $record['price']; ?></div>
	</div>
</a>
<?php
}
?>
</div>
	

</body>
</html>
<?php
$mysqli->close();
?>






