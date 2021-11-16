<?php

class Car {
	public $color, $model;

	public function __construct($color, $model){
		$this->color = $color;
		$this->model = $model;
	}

	public function classMethod(){
		return "My cars model is: " . $this->model . " & color is: " . $this->color . "\n";
	}

}

# OBJECTS in php
$maruti = new Car("Black", "Maruti");

$volvo = new Car("White", "Volvo");


# now individual php objects calling their methods!

echo $maruti->classMethod();

echo "\n";

echo $volvo->classMethod();



?>
