<?php require_once('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php
//products.php
$sql="SELECT * FROM `products` ORDER BY `products`.`id` DESC";
$recordset=$mysqli->query($query);
mysqli_fetch_all($recordset, MYSQLI_ASSOC);
?>

<div class="products_list">
<?php
foreach($recordset as $record){
?>
<div class="product">
    <a href="product.php?id=<?php echo $record['id']; ?>">
        <div class="product_image">
        	<img src="<?php echo $record['image']; ?>">
        </div>
        <div class="product_name">
	        <?php echo $record['name']; ?>
        </div>
    </a>
</div>
<?php } ?>
</div>




</body>
</html>
<?php
$mysqli->close();
?>
