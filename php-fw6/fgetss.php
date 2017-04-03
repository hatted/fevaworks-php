<?php
//fgetss.php
$file=fopen('http://www.fevaworks.com','r');
while (!feof($file)){
	$content=fgetss($file, 4096);
	echo $content;
}
fclose($file);
?>