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
//product.php
$sql="SELECT * FROM `products` WHERE id=".$_GET['id'];
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
      <td><?php echo $record['price']; ?></td>
    </tr>
    <tr>
      <td>image</td>
      <td><img src="<?php echo $record['image']; ?>"></td>
    </tr>
    <tr>
      <td>createdate</td>
      <td><?php echo $record['createdate']; ?></td>
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
