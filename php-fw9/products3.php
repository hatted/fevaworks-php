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

<table width="800" border="1">
  <tbody>
    <tr>
      <td>id</td>
      <td>name</td>
      <td>image</td>
    </tr>
<?php
foreach($recordset as $record){
?>
    <tr>
      <td><a href="product.php?id=<?php echo $record['id']; ?>"><?php echo $record['id']; ?></a></td>
      <td><?php echo $record['name']; ?></td>
      <td><img src="<?php echo $record['image']; ?>"></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

</body>
</html>
<?php
$mysqli->close();
?>
