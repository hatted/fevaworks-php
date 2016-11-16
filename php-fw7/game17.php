<?php
//game.php
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
	function hit($hit){
		echo $this->name." OLD HP: ".$this->hp."<br>";
		$this->hp-=$hit;
		echo $this->name." NEW HP: ".$this->hp."<br>";
		if ($this->hp<=0){
			echo $this->name." is dead. XO<br><br>";
		}
	}
}

class Enemy extends Character{
	function alert(){
		echo "Enemy is coming<br><br>";
	}
	function fireAttack(){
		$hit=$this->attack*2;
		echo "FIRE ATTACK: ".$hit."<br>";
		return $hit;
	}
}
class Boss extends Enemy{
	function iceAttack(){
		$hit=$this->attack*3;
		echo "ICE ATTACK: ".$hit."<br>";
		return $hit;
	}
}

$hero=new Character("Raymond", 100, 80);
$hero->getName();
$hero->getHp();
$hero->getAttack();
echo "<br>";

$pig=new Enemy("Pig", 10, 9);
$pig->getName();
$pig->getHp();
$pig->getAttack();
$pig->alert();

$hero->hit($pig->attack);
$pig->hit($hero->attack);


$wolf=new Enemy("Wolf", 20, 18);
$wolf->getName();
$wolf->getHp();
$wolf->getAttack();
$wolf->alert();

$hero->hit($wolf->fireAttack());
$wolf->hit($hero->attack);

$dragon=new Boss("Dragon", 50, 30);
$dragon->getName();
$dragon->getHp();
$dragon->getAttack();
$dragon->alert();

$hero->hit($dragon->iceAttack());



?>