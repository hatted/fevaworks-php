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


//print names and marks
for ($i=1; $i<=10; $i++) {
	echo "$name[$i] ";
	echo "$mark[$i]";
	echo "<br>";
}






if ($mark[$i]==100) {
	echo "you got full marks";
} elseif ($mark[$i]>90) {
	echo "you got A";
} elseif ($mark[$i]>80) {
	echo "you got B";
} elseif ($mark[$i]>70) {
	echo "you got C";
} elseif ($mark[$i]>=60) {
	echo "you got D";
} else {
	echo "you are fail";
}






//print out who are fail.
for ($i=1; $i<=10; $i++) {
	if ($mark[$i]<60) {
		echo "$name[$i]";
	}
}






//find total number of student more than 70
$total70=0;
for ($i=1; $i<=10; $i++) {
	if ($mark[$i]>70) {
		$total70++;
	}
}
echo "There are $total70 people get more than 70 marks";







//find highest
$highestmark=max($mark);
echo "highest mark is $highestmark";








//find lowest
$lowestmark=min($mark);
echo "lowest mark is $lowestmark";








//find average
$totalmark=array_sum($mark);
$average=$totalmark/sizeof($mark);
echo "Average is $average";
?>