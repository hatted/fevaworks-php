<?php
//path.php
$path = "C:\Windows\System32\calc.exe";
echo basename($path)."<br>";
echo basename($path, ".exe")."<br>";
echo dirname($path)."<br>";
print_r(pathinfo($path));
echo "<br>";
echo realpath($path)."<br>";
?> 