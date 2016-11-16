<?php
//tv.php
class TV{
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
}

$sony=new TV();
$sony->turnOn();
$sony->turnOff();
$sony->volumeUp();
$sony->volumeDown();
?>
