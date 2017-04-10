<?php
//cart.php
$total=0;

$bag=69;
$pen=29;
$suitcase=168;

$total+=$bag; //0+69=69
$total+=$pen*3; //69+29*3=98
$total+=$suitcase; //98+168=266

echo "$total";
?>