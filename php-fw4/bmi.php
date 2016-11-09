<?php
//bmi.php
$bmi=round($_POST['weight']/$_POST['height']/$_POST['height'], 2);
echo "Your BMI is $bmi<BR>";

if ($bmi>25){
	echo "You are too heavy";
} else if ($bmi<18.5){
	echo "You are not heavy enough";
} else {
	echo "You are fit";
}
?>
