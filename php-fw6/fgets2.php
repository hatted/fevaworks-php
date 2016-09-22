<?php
//fgets2.php
$file=fopen('text.txt','r');
while (!feof($file)){
	$content=fgets($file);
	echo "$content<br>";
}
fclose($file);
?>