<?php
//tv.php
class TV{
	var $plug="UK";

	function turnOn(){
		echo "turn on<br>";
	}
	function turnOff(){
		echo "turn off<br>";
	}
	function volumeUp(){
		echo "volume up<br>";
	}
	function volumeDown(){
		echo "volume down<br>";
	}
	function getPlug(){
		echo "this plug type is ".$this->plug."<br>";
	}
}

$sony=new TV();
$sony->turnOn();
$sony->turnOff();
$sony->volumeUp();
$sony->volumeDown();
$sony->getPlug();
?>
