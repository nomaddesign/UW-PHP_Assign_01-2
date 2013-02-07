<?php

namespace Vehicle;

require_once __DIR__.'/../../bootstrap.php';
/**
* Abstract class to represent vehicles
* uses VehicleInterface Interface
*/
abstract class Vehicle {
	
	/**
	* Name of vehicle
	* @var string
	*/
	public $_name;
	
	/**
	* Number of doors
	* @var int
	*/
	protected $_numberOfDoors;
	
	/**
	* Return the number of doors
	* @return int
	*/
	abstract public function getNumberOfDoors();

}//END Class Vehicle

?>