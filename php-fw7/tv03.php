<?php
//tv.php
class TV{
	function turnOn(){
		echo "turn on<br>";
	}
	function turnOff(){
		echo "turn off<br>";
	}
}
$sony=new TV();
$sony->turnOn();
$sony->turnOff();

?>
