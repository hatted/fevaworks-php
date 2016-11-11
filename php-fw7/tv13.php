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
}
class LCD extends TV{
	function __construct($new_size, $new_color){
		parent::__construct($new_size, $new_color);
	}
	function dolbyOn(){
		echo "dolby is on<br>";
	}
	function dolbyOff(){
		echo "dolby is off<br>";
	}
	public function timeroff(){
		echo "in 30 min, ";
		parent::turnOff();
	}
	public static function insurance(){
		echo "insurance cover $1<br>";
	}
}

$sony=new TV(42, "black");
$sony->turnOn();
$sony->turnOff();
$sony->getPlug();
echo "this TV size is ".$sony->size."<br>";
echo "this TV color is ".$sony->color."<br>";
echo "<br>";

$philips=new TV(32, "black");
$philips->turnOn();
$philips->turnOff();
$philips->getPlug();
echo "this TV size is ".$philips->size."<br>";
echo "this TV color is ".$philips->color."<br>";
echo "<br>";

$samsung=new LCD(50, 10000);
$samsung->turnOn();
$samsung->turnOff();
$samsung->getPlug();
$samsung->dolbyOn();
$samsung->dolbyOff();
$samsung->timeroff();
echo "this TV size is ".$samsung->size."<br>";
echo "this TV color is ".$samsung->color."<br>";
echo "<br>";

LCD::insurance();

?>
