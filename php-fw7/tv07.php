<?php
//tv.php
class TV{
	var $plug="UK";
	var $size;
	var $color;

	function __construct($new_size, $new_color){
		$this->size=$new_size;
		$this->color=$new_color;
	}
	function turnOn(){
		echo "turn on<br>";
	}
	function turnOff(){
		echo "turn off<br>";
	}
	function getPlug(){
		echo "this plug type is ".$this->plug."<br>";
	}
	function getColor(){
		echo "this color is ".$this->color."<br>";
	}
}
$sony=new TV(42, "black");
$sony->turnOn();
$sony->turnOff();
$sony->getPlug();
$sony->getColor();
echo "this TV size is ".$sony->size."<br>";

$philips=new TV(32, "silver");
$philips->turnOn();
$philips->turnOff();
$philips->getPlug();
$philips->getColor();
echo "this TV size is ".$philips->size."<br>";
?>
