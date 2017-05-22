<?php
//cart.php
$total=0;

$huawei=3788;
$ranababy=799;
$utalife=165;

$total+=$huawei;     //0+3788=3788
$total+=$ranababy*2; //3788+799*3=6185
$total+=$utalife*3;  //6185+165*3=6680

echo "$total";
?>