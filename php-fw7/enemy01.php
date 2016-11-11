<?php
//enemy.php
class Enemy{
	var $hp;
	var $atk;
	function __construct($hp, $atk){
		$this->hp=$hp;
		$this->atk=$atk;
	}
}

$pig=new Enemy(10,10);




?>
