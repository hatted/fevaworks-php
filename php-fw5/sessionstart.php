<?php
//sessionstart.php
session_start();

$_SESSION['username']='ray';
$_SESSION['password']='password';
$_SESSION['time'] = time();

echo "page 1<br>";
echo "username is ".$_SESSION['username']."<br>";
echo "password is ".$_SESSION['password']."<br>";
echo "time is ".$_SESSION['time']."<br>";

echo '<a href="session2.php">page 2</a>';
echo "<br>";

echo '<a href="session2.php?'.session_id().'">page 2</a>';
?>