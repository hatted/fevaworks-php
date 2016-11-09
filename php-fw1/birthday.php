<?php
//birthday.php
date_default_timezone_set('Asia/Hong_Kong');
$name="Raymond";
$birthday=19900517;
$today=date("Ymd");
$age=floor(($today-$birthday)/(10000));

echo "You are $age years old";
?>