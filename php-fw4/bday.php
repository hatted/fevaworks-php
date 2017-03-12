<?php
//bday.php
date_default_timezone_set('Asia/Hong_Kong');
$bday=$_POST['year'].$_POST['month'].$_POST['day'];
$today=date("Ymd");
$age=floor(($today-$bday)/(10000));

echo "You are $age years old";
?>