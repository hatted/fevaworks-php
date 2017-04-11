<?php
//fgets.php
$file=fopen('text.txt','r');
	$content=fgets($file);
	echo $content;
fclose($file);
?>