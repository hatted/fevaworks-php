<?php
//sort2.php
$race=array(
	3 => "honda", 
	1 => "benz", 
	0 => "subaru", 
	2 => "BMW"
);
$race[3]="honda";
$race[1]="benz";
$race[0]="subaru";
$race[2]="BMW";
sort($race);
$race[0]="BMW";
$race[1]="benz";
$race[2]="honda";
$race[3]="subaru";
print_r($race);
echo "<br>";

$race=array(
	3 => "honda", 
	1 => "benz", 
	0 => "subaru", 
	2 => "BMW"
);
asort($race);
$race=array(
	2 => "BMW",
	1 => "benz",
	3 => "honda",
	0 => "subaru"
);
print_r($race);
echo "<br>";

$race=array(
	3 => "honda", 
	1 => "benz", 
	0 => "subaru", 
	2 => "BMW"
);
ksort($race);
$race=array(
	0 => "subaru", 
	1 => "benz", 
	2 => "BMW",
	3 => "honda"
);
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

