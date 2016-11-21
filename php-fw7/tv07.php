<?php
//tv.php
class TV{
	var $name;
	var $plug="UK";
	var $size;

	function __construct($new_name,$new_size){
		$this->name=$new_name;
		$this->size=$new_size;
	}
	function getName(){
		echo "this TV name is ".$this->name."<br>";
	}
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

$sony=new TV("Sony",42);
$sony->getName();
$sony->turnOn();
$sony->turnOff();
$sony->volumeUp();
$sony->volumeDown();
$sony->getPlug();
echo "this TV size is ".$sony->size."<br>";
echo "<br>";

?>
