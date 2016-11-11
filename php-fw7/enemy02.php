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
}

$pig=new Enemy(1,1,1,1);
$pig->alert();



?>