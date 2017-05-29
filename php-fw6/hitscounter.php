<?php
//hitscounter.php
$counter=fopen('counter.txt','r');
$hits=fgets($counter);
echo "You are visitor number $hits to this site";
fclose($counter);

$hits++;
$counter=fopen('counter.txt','w');
fwrite($counter,$hits);
fclose($counter);
?>