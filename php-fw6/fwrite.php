<?php
//fwrite.php
$file=fopen('text.txt','a');
fwrite($file,"\nnice to meet you");
fclose($file);
?>