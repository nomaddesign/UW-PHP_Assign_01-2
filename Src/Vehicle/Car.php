<?php

namespace Car;

require_once __DIR__.'/../../bootstrap.php';

/*
* Car Class represents cars as subclass of Vehicle class
* Sets $_numberOfDoors, $_name and $_year of Car
* implemento honk(), getNumberOfDoors() & getName() methods
*/
class Car extends \Vehicle\Vehicle implements \VehicleInterface {
	
	/**
	* Number of doors
	* @ int
	*/
	public $_numberOfDoors = 4;
	
	/**
	* Name of vehicle 
	* @protected string
	*/
	public $_name = "Car";
	
	/**
	* Model Year of vehicle 
	* @protected int
	*/
	public $_year = 2001;
	
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
	* @protected int
	*/
	public function setYear($yr){
	   $this->_year = $yr;
	}
	
}// END Class Car 

?>