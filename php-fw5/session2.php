<?php
//session2.php
session_start();

echo "Welcome to page #2<br>";

echo $_SESSION['username']."<br>";
echo $_SESSION['password']."<br>";
echo date('Y-m-d H:i:s', $_SESSION['time'])."<br>";
echo '<a href="sessionstart.php">page 1</a>';
?> 