<?php
//fwrite.php
$file=fopen('text.txt','a');
fwrite($file,"nice to meet you");
fclose($file);
?>