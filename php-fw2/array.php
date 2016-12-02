<?php
//array.php
$name1="Dave";
$name2="John";
$name3="Mary";

$name[1]="Dave";
$name[2]="John";
$name[3]="Mary";

echo "hello $name1";
echo "hello $name2";
echo "hello $name3";

for ($i=0; $i<3; $i++) {
	echo "hello $name[$i]";
}
?>