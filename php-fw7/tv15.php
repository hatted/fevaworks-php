<?php
//tv.php
class TV{
	public $plug="UK";
	var $size;
	var $color;
	private $voltage=240;

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
	function getVoltage(){
			echo $this->voltage."V<br>";
	}
	function setVoltage($new_voltage){
		$this->voltage=$new_voltage;
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
}

$sony=new TV(42, "black");
$sony->turnOn();
$sony->turnOff();
$sony->plug="CN";
$sony->getPlug();
echo "this TV size is ".$sony->size."<br>";
echo "this TV color is ".$sony->color."<br>";
//$sony->voltage=120;
$sony->getVoltage();
$sony->setVoltage(120);
$sony->getVoltage();
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


?>
