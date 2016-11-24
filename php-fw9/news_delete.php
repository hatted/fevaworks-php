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
//if ((!empty($_GET['id'])) && (is_int($_GET['id']))){
$id = $mysqli->real_escape_string($_GET['id']);
if (!empty($id)){
  $query="SELECT * FROM `news` WHERE id=".$_GET['id'];
  //echo $query;
  $recordset=$mysqli->query($query);
  if ($recordset){
  ?>
    <table width="800" border="1">
      <tbody>
    <?php
    //foreach($recordset as $record){
    while ($record=$recordset->fetch_assoc()){
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
  <?php }
 ?>
<p><a href="news_readall.php">Readall</a></p>
</body>
</html>
<?php
$mysqli->close();
?>
