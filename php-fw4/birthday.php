<?php
//birthday.php
date_default_timezone_set('Asia/Hong_Kong');
$bday=19900517;
$today=date("Ymd");
$age=floor(($today-$bday)/(10000));

echo "You are $age years old";
?>