<?php
//student.php

//insert names to array
$name[1]="mark";
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



if ($marks==100) {
	echo "you got full marks";
} elseif ($marks>90) {
	echo "you got A";
} elseif ($marks>80) {
	echo "you got B";
} elseif ($marks>70) {
	echo "you got C";
} elseif ($marks>=60) {
	echo "you got D";
} else {
	echo "you are fail";
}



?>
