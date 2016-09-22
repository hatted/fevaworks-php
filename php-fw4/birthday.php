<?php
//birthday.php
$bday=19900517;
$today=date("Ymd");
$age=floor(($today-$bday)/(10000));

echo "You are $age years old";
?>