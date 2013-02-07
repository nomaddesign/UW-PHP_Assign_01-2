<?php

namespace Truck;

require_once __DIR__.'/../../bootstrap.php';

/*
* Truck class represents trucks as subclass of Vehicle class
* implemento honk(), getNumberOfDoors() & getName() methods
* Sets $_numberOfDoors, $_name and $_year of Truck
*/
class Truck extends \Vehicle\Vehicle implements \VehicleInterface{
	
	/**
	* Number of doors
	* @var int
	*/
	var $_numberOfDoors = 2;
	
	/**
	* Name of vehicle 
	* @var string
	*/
	var $_name = "Truck";
	
	/**
	* Model Year of vehicle 
	* @var int
	*/
	var $_year = 1974;
	
	/**
	* Return vehicle honk sound
	* return string
	*/
	public function honk(){
		return "   ";
	}
	
	/**
	* Return vehicle doors number
	* return int
	*/
	public function getNumberOfDoors() {
	   return $this->_numberOfDoors;
	}
	
	/**
	* Return vehicle name 
	* return string
	*/
	public function getName() {
	   return $this->_name;
	}
	
	/**
	* Return vehicle year number
	* return int
	*/
	public function getYear(){
	   return $this->_year;
	}
	
	/**
	* Set vehicle year $yr
	* @var int
	*/
	public function setYear($yr){
	   $this->_year = $yr;
	}
	
}// END Class Truck

?>