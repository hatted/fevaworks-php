<?php
//hitscounter.php
$counter=fopen('counter.txt','r');
$hits=fgets($counter);
echo $hits;
fclose($counter);

$hits++;
$counter=fopen('counter.txt','w');
fwrite($counter,$hits);
fclose($counter);
?>