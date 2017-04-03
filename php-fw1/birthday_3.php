<?php
//birthday.php
date_default_timezone_set('Asia/Hong_Kong');
$name="Raymond";
echo "$name";
echo "<br>";
$birthday=19900911;
echo "$birthday";
echo "<br>";
$today=date("Ymd");
echo "$today";
echo "<br>";

$age=floor(($today-$birthday)/(10000));

echo "You are $age years old";
?>