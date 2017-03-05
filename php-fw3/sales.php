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
$sales[1]=341;
$sales[2]=122;
$sales[3]=673;
$sales[4]=284;
$sales[5]=945;
$sales[6]=166;
$sales[7]=327;
$sales[8]=848;
$sales[9]=279;
$sales[10]=740;

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
$countsales=count($sales);
$average=$totalsales/$countsales;
echo "Average is $average";

$range=$maximum-$minimum;
echo "Range is $range";







//find total number of student more than 70
$total300=0;
for ($i=1; $i<=10; $i++) {
	if ($sales[$i]>300) {
		$total300++;
	}
}
echo "There are $total300 people get more than 300 sales";







for ($i=1; $i<=10; $i++) {
	if ($sales[$i]<300){
		echo $name[$i];
		echo "<br>";
	}
}






for ($i=1; $i<=10; $i++) {
	if ($sales[$i]<300) {
		$salary[$i]=$sales[$i]/2;
	} else {
		$salary[$i]=$sales[$i]*0.6;
	}
	echo $name[$i]." ".$salary[$i];
	echo "<br>";
}
?>
