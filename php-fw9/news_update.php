<?php include('db.inc.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>news_update</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<p>
  <?php
//news_update.php
$id = $mysqli->real_escape_string($_GET['id']);
if (!empty($id)){
  $query="SELECT * FROM `news` WHERE id=".$id;
  $recordset=$mysqli->query($query);
  if ($recordset){
    $record=mysqli_fetch_array($recordset, MYSQLI_ASSOC);
    ?>
    </p>
    <form action="news_update2.php" method="post" name="form1" id="form1">
      <table width="600" border="1">
        <tbody>
          <tr>
            <td width="186">id</td>
            <td width="398"><?php echo $record['id']; ?>
            <input type="hidden" name="id" id="id" value="<?php echo $record['id']; ?>"></td>
          </tr>
          <tr>
            <td>subject</td>
            <td>
            <input value="<?php echo $record['subject']; ?>" type="text" name="subject" id="subject"></td>
          </tr>
          <tr>
            <td>description</td>
            <td>
            <input value="<?php echo $record['description']; ?>" type="text" name="description" id="description"></td>
          </tr>
          <tr>
            <td>createdate</td>
            <td><?php echo $record['createdate']; ?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" id="submit" value="Submit">
            <input type="reset" name="reset" id="reset" value="Reset"></td>
          </tr>
        </tbody>
      </table>
    </form>
  <?php 
  } 
}
 ?>
<p><a href="news_readall.php">sms_readall.php</a></p>
</body>
</html>
<?php $mysqli->close(); ?>