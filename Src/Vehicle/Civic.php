<?php

namespace Civic;

require_once __DIR__.'/../../bootstrap.php';

/*
* Civic class represents Civic Cars as subclass of Car class which is subclass of Vehicle class
* Sets $_numberOfDoors, $_name and $_year of Car
* implemento honk()  method
*/
class Civic extends \Car\Car implements \VehicleInterface {

	/**
	* Number of doors
	* @var int
	*/
	var $_numberOfDoors = 3;
	
	/**
	* Name of vehicle 
	* @var string
	*/
	var $_name = "Civic";
	
	/**
	* Model Year of vehicle 
	* @var int
	*/
	var $_year = 2013;
	
	/**
	* Return vehicle honk sound
	* return string
	*/
	public function honk(){
		return "honk honk";
	}
	
}//END Class Civic

?>