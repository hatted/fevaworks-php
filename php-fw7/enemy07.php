<?php
//enemy.php
class Enemy{
	var $hp;
	var $sp;
	var $mp;
	var $atk;
	function __construct($hp, $sp, $mp, $atk){
		$this->hp=$hp;
		$this->sp=$sp;
		$this->mp=$mp;
		$this->atk=$atk;
	}
	function alert(){
		echo "Enemy is coming<br>";
	}
	function hit($hitpoint){
		$this->hp-=$hitpoint;
		echo "new hp: ".$this->hp."<br>";
	}
	function attack(){
		echo "Your hp-".$this->atk."<br>";
	}
}
class Dragon extends Enemy{
	function __construct($hp, $sp, $mp, $atk){
		parent::__construct($hp, $sp, $mp, $atk);
	}
	function fireAttack(){
		echo "Your hp-". parent::$this->atk*2 ."<br>";
	}
}
class Boss extends Dragon{
	function __constuct($hp, $sp, $mp, $atk){
		parent::__construct($hp, $sp, $mp, $atk);
	}
	function freeze(){
		echo "freezing...";
		sleep(3);
		echo "dead...";
	}
}


class Character{
	var $hp;
	var $atk;
	function __construct($hp, $atk){
		$this->hp=$hp;
		$this->atk=$atk;
	}
	function attack(){
		return rand(0, $this->atk);
	}
}

$raymond=new Character(100,100);
$attack=$raymond->attack();
echo "attack: ".$attack."<br>";

$pig=new Enemy(1,1,1,1);
$pig->alert();
$pig->hit($attack);
$pig->attack();
echo "<br>";

$redpig=new Enemy(5,0,0,5);
$redpig->hit($attack);
$redpig->attack();
echo "<br>";

$reddragon=new Dragon(50,50,50,50);
$reddragon->attack();
$reddragon->fireAttack();

$boss=new Boss(100,100,100,100);
$boss->freeze();


?>