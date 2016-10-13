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
$bmi[1]=28;
$bmi[2]=25;
$bmi[3]=24;
$bmi[4]=26;
$bmi[5]=15;
$bmi[6]=29;
$bmi[7]=22;
$bmi[8]=27;
$bmi[9]=15;
$bmi[10]=30;


//print names and marks
$underweight=0;
$normalweight=0;
$overweight=0;
for ($i=1; $i<=10; $i++) {
	echo "$name[$i] ";
	echo "$bmi[$i] ";
	if ($bmi[$i]>25) {
		echo "overweight";
		$overweight++;
	} elseif ($bmi[$i]<18.5) {
		echo "underweight";
		$underweight++;
	} else {
		echo "normal";
		$normalweight++;
	}
	echo "<br>";
}



echo "<br>";
echo "There are $underweight people under weight<br>";
echo "There are $normalweight people normal weight<br>";
echo "There are $overweight people over weight<br>";






//find average
echo "<br>";
$totalbmi=array_sum($bmi);
$average=$totalbmi/sizeof($bmi);
echo "Average BMI is $average";
?>