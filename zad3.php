<?php
	class Kocka{
		public $duljina;
		public $sirina;
		public $visina;
		public function ispisPodataka(){
			echo "duljina = ".$this->duljina;
			echo " sirina = ".$this->sirina;
			echo " visina = ".$this->visina;
		}
	}
	
	function biggerCube($cube1, $cube2){
		$cube1pov = $cube1->duljina * $cube1->sirina * $cube1->visina;
		$cube2pov = $cube2->duljina * $cube2->sirina * $cube2->visina;
		if($cube1pov >= $cube2pov){
			return $cube1;
		}
		return $cube2;
	}
	
	$cube1 = new Kocka;
	$cube1->duljina = "2";
	$cube1->sirina = "2";
	$cube1->visina = "2";
	
	$cube2 = new Kocka;
	$cube2->duljina = "3";
	$cube2->sirina = "3";
	$cube2->visina = "3";
	
	$rezultat = biggerCube($cube1, $cube2);
	print_r($rezultat->ispisPodataka());
?>

