<?php require_once('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>news_readall</title>
</head>

<body>
<?php
//news_readall.php
$query="SELECT * FROM `news` ORDER BY `news`.`id` DESC";
$recordset=$mysqli->query($query);
echo "a";
print_r($recordset);
echo "b";
//mysqli_fetch_all($recordset, MYSQLI_ASSOC);
?>


<table width="800" border="1">
  <tbody>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>id</td>
      <td>subject</td>
      <td>description</td>
      <td>createdate</td>
    </tr>
<?php
//foreach($recordset as $record){

while ($record=$recordset->fetch_array(MYSQLI_ASSOC)){
//while ($record=mysqli_fetch_assoc($recordset)){
?>
    <tr>
      <td><a href="news_update.php?id=<?php echo $record['id']; ?>">update</a></td>
      <td><a href="news_delete.php?id=<?php echo $record['id']; ?>">delete</a></td>
      <td><a href="news_read.php?id=<?php echo $record['id']; ?>"><?php echo $record['id']; ?></a></td>
      <td><?php echo $record['subject']; ?></td>
      <td><?php echo $record['description']; ?></td>
      <td><?php echo $record['createdate']; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<p><a href="news_create.html">Create</a></p>
</body>
</html>
<?php
$mysqli->close();
?>
