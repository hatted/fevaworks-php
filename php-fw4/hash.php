<?php
//hash.php
$password="apple";
$encrypt=md5($password);
echo $encrypt."<br>";

echo hash('md5', $password)."<br>";
echo hash('sha1', $password)."<br>";
echo hash('sha256', $password)."<br>";
echo hash('sha512', $password)."<br>";
?>