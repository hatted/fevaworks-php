<?php require_once('Connections/db.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_db, $db);
$query_innerjoin = "SELECT p.LastName, p.FirstName, o.OrderNo FROM p INNER JOIN o ON p.id=o.pid ORDER BY p.LastName";
$innerjoin = mysql_query($query_innerjoin, $db) or die(mysql_error());
$row_innerjoin = mysql_fetch_assoc($innerjoin);
$totalRows_innerjoin = mysql_num_rows($innerjoin);

mysql_select_db($database_db, $db);
$query_where = "SELECT p.LastName, p.FirstName, o.OrderNo FROM p, o where p.id=o.pid ORDER BY p.LastName";
$where = mysql_query($query_where, $db) or die(mysql_error());
$row_where = mysql_fetch_assoc($where);
$totalRows_where = mysql_num_rows($where);

mysql_select_db($database_db, $db);
$query_leftjoin = "SELECT p.LastName, p.FirstName, o.OrderNo FROM p LEFT JOIN o ON p.id=o.pid ORDER BY p.LastName";
$leftjoin = mysql_query($query_leftjoin, $db) or die(mysql_error());
$row_leftjoin = mysql_fetch_assoc($leftjoin);
$totalRows_leftjoin = mysql_num_rows($leftjoin);

mysql_select_db($database_db, $db);
$query_rightjoin = "SELECT p.LastName, p.FirstName, o.OrderNo FROM p RIGHT JOIN o ON p.id=o.pid ORDER BY p.LastName";
$rightjoin = mysql_query($query_rightjoin, $db) or die(mysql_error());
$row_rightjoin = mysql_fetch_assoc($rightjoin);
$totalRows_rightjoin = mysql_num_rows($rightjoin);

mysql_select_db($database_db, $db);
$query_crossjoin = "SELECT p.LastName, p.FirstName, o.OrderNo FROM p cross JOIN o ORDER BY p.LastName";
$crossjoin = mysql_query($query_crossjoin, $db) or die(mysql_error());
$row_crossjoin = mysql_fetch_assoc($crossjoin);
$totalRows_crossjoin = mysql_num_rows($crossjoin);

mysql_select_db($database_db, $db);
$query_straightjoin = "SELECT *  FROM p STRAIGHT_JOIN o";
$straightjoin = mysql_query($query_straightjoin, $db) or die(mysql_error());
$row_straightjoin = mysql_fetch_assoc($straightjoin);
$totalRows_straightjoin = mysql_num_rows($straightjoin);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>WHERE</p>
<p>show all results</p>
<table border="1" cellpadding="1" cellspacing="1">
  <tr>
    <td>LastName</td>
    <td>FirstName</td>
    <td>OrderNo</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_where['LastName']; ?></td>
      <td><?php echo $row_where['FirstName']; ?></td>
      <td><?php echo $row_where['OrderNo']; ?></td>
    </tr>
    <?php } while ($row_where = mysql_fetch_assoc($where)); ?>
</table>
<p>InnerJoin (same as Join)</p>
<p> The INNER JOIN keyword return rows when there is at least one match in both tables. If there are rows in &quot;Persons&quot; that do not have matches in &quot;Orders&quot;, those rows will NOT be listed. </p>
<table border="1" cellpadding="1" cellspacing="1">
  <tr>
    <td>LastName</td>
    <td>FirstName</td>
    <td>OrderNo</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_innerjoin['LastName']; ?></td>
      <td><?php echo $row_innerjoin['FirstName']; ?></td>
      <td><?php echo $row_innerjoin['OrderNo']; ?></td>
    </tr>
    <?php } while ($row_innerjoin = mysql_fetch_assoc($innerjoin)); ?>
</table>
<p>Left Join (Left Outer Join)</p>
<p> The LEFT JOIN keyword returns all the rows from the left table (Persons), even if there are no matches in the right table (Orders).</p>
<table border="1" cellpadding="1" cellspacing="1">
  <tr>
    <td>LastName</td>
    <td>FirstName</td>
    <td>OrderNo</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_leftjoin['LastName']; ?></td>
      <td><?php echo $row_leftjoin['FirstName']; ?></td>
      <td><?php echo $row_leftjoin['OrderNo']; ?></td>
    </tr>
    <?php } while ($row_leftjoin = mysql_fetch_assoc($leftjoin)); ?>
</table>
<p>Right Join (Right Outer Join)</p>
<p> The RIGHT JOIN keyword returns all the rows from the right table (Orders), even if there are no matches in the left table (Persons).</p>
<table border="1" cellpadding="1" cellspacing="1">
  <tr>
    <td>LastName</td>
    <td>FirstName</td>
    <td>OrderNo</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_rightjoin['LastName']; ?></td>
      <td><?php echo $row_rightjoin['FirstName']; ?></td>
      <td><?php echo $row_rightjoin['OrderNo']; ?></td>
    </tr>
    <?php } while ($row_rightjoin = mysql_fetch_assoc($rightjoin)); ?>
</table>
<p>Cross Join</p>
<p>CROSS JOIN as a join without a condition which builds the Cartesian product of two tables. In that case, MySQL combines every row in the left table with every row in the right table and returns the result set.</p>
<table border="1" cellpadding="1" cellspacing="1">
  <tr>
    <td>LastName</td>
    <td>FirstName</td>
    <td>OrderNo</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_crossjoin['LastName']; ?></td>
      <td><?php echo $row_crossjoin['FirstName']; ?></td>
      <td><?php echo $row_crossjoin['OrderNo']; ?></td>
    </tr>
    <?php } while ($row_crossjoin = mysql_fetch_assoc($crossjoin)); ?>
</table>
<p>Straight Join</p>
<p>A STRAIGHT_JOIN identifies and combines matching rows which are stored in two related tables. This is what an inner join also does. The difference between an inner join and a straight join is that a straight join forces MySQL to read the left table first.</p>
<table border="1" cellpadding="1" cellspacing="1">
  <tr>
    <td>id</td>
    <td>LastName</td>
    <td>FirstName</td>
    <td>Address</td>
    <td>City</td>
    <td>id</td>
    <td>OrderNo</td>
    <td>pid</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_straightjoin['id']; ?></td>
      <td><?php echo $row_straightjoin['LastName']; ?></td>
      <td><?php echo $row_straightjoin['FirstName']; ?></td>
      <td><?php echo $row_straightjoin['Address']; ?></td>
      <td><?php echo $row_straightjoin['City']; ?></td>
      <td><?php echo $row_straightjoin['id']; ?></td>
      <td><?php echo $row_straightjoin['OrderNo']; ?></td>
      <td><?php echo $row_straightjoin['pid']; ?></td>
    </tr>
    <?php } while ($row_straightjoin = mysql_fetch_assoc($straightjoin)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($innerjoin);

mysql_free_result($where);

mysql_free_result($leftjoin);

mysql_free_result($rightjoin);

mysql_free_result($crossjoin);

mysql_free_result($straightjoin);
?>
