<?php
//bmi.php
$result=round($_POST['weight']/$_POST['height']/$_POST['height'], 2);
echo "Your BMI is $result<BR>";
if ($result>25){
	echo "You are too heavy";
} else if ($result<18.5){
	echo "You are not heavy enough";
} else {
	echo "You are fit";
}
?>