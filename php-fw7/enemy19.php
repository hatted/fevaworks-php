<?php
//enemy.php
class Character{
	private $name;
	private $hp;
	public $attack;
	function __construct($name, $hp, $attack){
		$this->name=$name;
		$this->hp=$hp;
		$this->attack=$attack;
	}
	function getName(){
		echo "NAME: ".$this->name."<br>";
	}
	function getHp(){
		echo "HP: ".$this->hp."<br>";
	}
	function getAttack(){
		echo "ATTACK: ".$this->attack."<br>";
	}
	function hit($hitpoint){
	    echo $this->name." OLD HP: ".$this->hp."<br>";
		$this->hp-=$hitpoint;
		echo $this->name." NEW HP: ".$this->hp."<br>";
		if ($this->hp<=0){
			echo $this->name." is dead. xo<br><br>";
		}
	}
}
class Enemy extends Character{
	function alert(){
		echo "Enemy is coming<br><br>";
	}
	function fireAttack(){
		$hitpoint=$this->attack*2;
		echo "FIRE ATTACK: ".$hitpoint."<br>";
		return $hitpoint;
	}
}
class Dragon extends Enemy{
	function iceAttack(){
		echo "FREEZING...<br>";
		return $this->attack*3;
	}
}


$hero=new Character("Raymond",100,80);
$hero->getName();
$hero->getHp();
$hero->getAttack();
echo "<br>";

$pig=new Enemy("Pig",10,9);
$pig->getName();
$pig->getHp();
$pig->getAttack();
$pig->alert();

$hero->hit($pig->attack);
$pig->hit($hero->attack);
echo "<br>";

$cow=new Enemy("Cow",20,19);
$cow->getName();
$cow->getHp();
$cow->getAttack();
$cow->alert();

$hero->hit($cow->fireAttack());
$cow->hit($hero->attack);
echo "<br>";

$reddragon=new Dragon("Dragon",50,30);
$reddragon->getName();
$reddragon->getHp();
$reddragon->getAttack();
$reddragon->alert();

$hero->hit($reddragon->iceAttack());
echo "<br>";

?>
