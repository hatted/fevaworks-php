<?php
//game.php
$raymondpic="<img src='images/raymond.jpg'>";
$attackpic="<img src='images/attack.jpg'>";
$pigpic="<img src='images/pig.jpg'>";
$wolfpic="<img src='images/wolf.jpg'>";
$dragonpic="<img src='images/dragon.jpg'>";
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
		echo "HP: <span style='color:green'>".$this->hp."</span><br>";
	}
	function getAttack(){
		echo "ATTACK: <span style='color:blue'>".$this->attack."</span><br>";
	}
	function hit($hit){
		echo $this->name." OLD HP: <span style='color:blue'>".$this->hp."</span><br>";
		$this->hp-=$hit;
		echo $this->name." NEW HP: <span style='color:red'>".$this->hp."</span><br>";
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
		echo "FIRE ATTTACK: ".$hit."<br>";
		return $hit;
	}
}

class Boss extends Enemy{
	function iceAttack(){
		$hit=$this->attack*3;
		echo "ICE ATTTACK: ".$hit."<br>";
		return $hit;
	}
}

$hero=new Character($raymondpic, 100, 80);
$hero->getName();
$hero->getHp();
$hero->getAttack();
echo "<br>";

$pig=new Enemy($pigpic, 10, 9);
$pig->getName();
$pig->getHp();
$pig->getAttack();
$pig->alert();

$wolf=new Enemy($wolfpic, 20, 18);
$wolf->getName();
$wolf->getHp();
$wolf->getAttack();
$wolf->alert();

$dragon=new Boss($dragonpic, 50, 30);
$dragon->getName();
$dragon->getHp();
$dragon->getAttack();
$dragon->alert();

echo "<br>";
echo "<br>";
echo "<br>";
echo "$pigpic$attackpic$raymondpic<br>";
$hero->hit($pig->attack); //hero attack by pig
echo "<br>";
echo "<br>";
echo "$raymondpic$attackpic$pigpic<br>";
$pig->hit($hero->attack);
echo "<br>";
echo "<br>";
echo "$wolfpic$attackpic$raymondpic<br>";
$hero->hit($wolf->fireAttack()); //hero attack by wolf (fireAttack)
echo "$dragonpic$attackpic$raymondpic<br>";
$hero->hit($dragon->iceAttack()); //hero attack by dragon (iceAttack)
?>