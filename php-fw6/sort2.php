<?php
//sort2.php
$race=array(
	3 => "honda", 
	1 => "benz", 
	0 => "subaru", 
	2 => "BMW"
);
$race[3]="honda";
sort($race);
print_r($race);
echo "<br>";

$race=array(
	3 => "honda", 
	1 => "benz", 
	0 => "subaru", 
	2 => "BMW"
);
asort($race);
print_r($race);
echo "<br>";

$race=array(
	3 => "honda", 
	1 => "benz", 
	0 => "subaru", 
	2 => "BMW"
);
ksort($race);
print_r($race);
echo "<br>";


// reverse
$race=array(3 => "honda", 1 => "benz", 0 => "subaru", 2 => "BMW");
rsort($race);
print_r($race);
echo "<br>";

$race=array(3 => "honda", 1 => "benz", 0 => "subaru", 2 => "BMW");
arsort($race);
print_r($race);
echo "<br>";

$race=array(3 => "honda", 1 => "benz", 0 => "subaru", 2 => "BMW");
krsort($race);
print_r($race);
echo "<br>";
?>

