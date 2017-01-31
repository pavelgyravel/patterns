<?php 

class Beverage {
	public $description = "Base coffe desc";
	public $milk = false;
	public $soy = false;
	public $mocha = false;
	public $whip = false;


	public function setMilk ($cond){
		$this->milk = ($cond==true) ? true : false; 
	}
	public function setSoy ($cond){
		$this->soy = ($cond==true) ? true : false; 
	}
	public function setMocha ($cond){
		$this->mocha = ($cond==true) ? true : false; 
	}
	public function setWhip ($cond){
		$this->whip = ($cond==true) ? true : false; 
	}





	public function cost () {
		echo "Base cost";
	}
}



class DarkRoast extends Beverage {
	public $description = "DarkRoast description";
	public function DarkRoast () {
		//$this->description = "DarkRoast description";
	}

	public function cost () {
		parent::cost();
		echo "DarkRoast cost";
	}
}


$dr = new DarkRoast;
$dr->setMilk(true);
var_dump($dr);