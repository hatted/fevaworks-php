<?php
//bday.php
$bday=$_POST['year'].$_POST['month'].$_POST['day'];
$today=date("Ymd");
$age=floor(($today-$bday)/(10000));

echo "You are $age years old";
?>