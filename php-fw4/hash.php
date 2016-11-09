<?php
//hash.php
$password="apple";
echo hash('md5', 'apple')."<br>";
echo hash('sha1', 'apple')."<br>";
echo hash('sha256', 'apple')."<br>";
echo hash('sha512', 'apple')."<br>";
?>