<?php
//tv.php
class TV{
	var $plug="UK";

	function turnOn(){
		echo "turn on<br>";
	}
	function turnOff(){
		echo "turn on<br>";
	}
	function getPlug(){
		echo "this plug type is ".$this->plug."<br>";
	}
}
$sony=new TV(42);
$sony->turnOn();
$sony->turnOff();
$sony->getPlug();
?>
