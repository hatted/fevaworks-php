<?php
//sales.php

//insert names to array
$name[1]="sales";
$name[2]="john";
$name[3]="mary";
$name[4]="sue";
$name[5]="ada";
$name[6]="jack";
$name[7]="jay";
$name[8]="leo";
$name[9]="ben";
$name[10]="cindy";

//insert saless to array
$sales[1]=34;
$sales[2]=12;
$sales[3]=67;
$sales[4]=28;
$sales[5]=94;
$sales[6]=16;
$sales[7]=32;
$sales[8]=84;
$sales[9]=27;
$sales[10]=74;

//print names and sales
for ($i=10; $i>=1; $i--) {
	echo "$name[$i] ";
	echo "$sales[$i]";
	echo "<br>";
}

$maximum=max($sales);
echo "highest sales is $maximum";

$minimum=min($sales);
echo "lowest sales is $minimum";

//find average
$totalsales=array_sum($sales);
$average=$totalsales/sizeof($sales);
echo "Average is $average";

$range=$maximum-$minimum;
echo "Range is $range";


for ($i=1; $i<=10; $i++) {
	if ($sales[$i]<30){
		echo $name[$i];
		echo "<br>";
	}
}


for ($i=1; $i<=10; $i++) {
	if ($sales[$i]<60) {
		$salary=$sales[$i]/2;
	} else {
		$salary=$sales[$i]*0.6;
	}
	echo $name[$i]." ".$salary;
}
?>