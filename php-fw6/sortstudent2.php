<?php
//sortstudents.php

//insert names to array
$name[1]="dave";
$name[2]="john";
$name[3]="mary";
$name[4]="sue";
$name[5]="ada";
$name[6]="jack";
$name[7]="jay";
$name[8]="leo";
$name[9]="ben";
$name[10]="cindy";

//insert marks to array
$mark[1]=90;
$mark[2]=50;
$mark[3]=66;
$mark[4]=72;
$mark[5]=55;
$mark[6]=97;
$mark[7]=82;
$mark[8]=88;
$mark[9]=62;
$mark[10]=100;

asort($mark);
print_r($mark);
echo "<p>";

for ($i=1; $i<=sizeof($mark); $i++) {
	$classnumber=key($mark);
	echo "$classnumber $name[$classnumber] $mark[$classnumber]";
	echo "<br>";
	next($mark);
}


?>