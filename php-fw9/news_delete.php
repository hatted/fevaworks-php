<?php require_once('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>news_delete</title>
</head>

<body>
<?php
//news_delete.php
$query="SELECT * FROM `news` WHERE id=".$_GET['id'];
$recordset=$mysqli->query($query);
mysqli_fetch_all($recordset, MYSQLI_ASSOC);
?>

<table width="800" border="1">
  <tbody>
<?php
foreach($recordset as $record){
?>
    <tr>
      <td>id</td>
      <td><?php echo $record['id']; ?></td>
    </tr>
    <tr>
      <td>subject</td>
      <td><?php echo $record['subject']; ?></td>
    </tr>
    <tr>
      <td>description</td>
      <td><?php echo $record['description']; ?></td>
    </tr>
    <tr>
      <td>createdate</td>
      <td><?php echo $record['createdate']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><a href="news_delete2.php?id=<?php echo $record['id']; ?>">Yes, I want to delete.</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<p><a href="news_readall.php">Readall</a></p>
</body>
</html>
<?php
$mysqli->close();
?>
