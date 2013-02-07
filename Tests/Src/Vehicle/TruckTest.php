<?php

// namespace Truck;

require_once __DIR__.'/../../test_bootstrap.php';

/**
* unit test code to test Car object class
*/
class TruckTest extends \PHPUnit_Framework_TestCase {

	/**
	 * tests Truck::getNumberOfDoors
	 */
	public function testGetNumberOfDoors() {
		$vehicle_test = new \Truck\Truck();
		$doors_num = 2;
		$this->assertEquals($vehicle_test->getNumberOfDoors(), $doors_num);
	} 

	/*
	 * tests Truck::getName
	 */
	public function testGetName() {
		$vehicle_test = new \Truck\Truck();
		$_name = "Truck";
		$this->assertEquals($vehicle_test->getName(), $_name);
	}

	/**
	 * tests Truck::getYear
	 */
	public function testGetYear() {
		$vehicle_test = new \Truck\Truck();
		$_year = 1974;
		$this->assertEquals($vehicle_test->getYear(),$_year);
	}

	/**
	 * tests Truck::setYear
	 */
	public function testSetYear() {
	   $vehicle_test = new \Truck\Truck();
	   $_year = 2013;
	   $vehicle_test->setYear($_year);
	   $this->assertEquals($vehicle_test->getYear(), $_year);
	}

	/**
	 * tests Truck::honk
	 */
	public function testHonk() {
	   $vehicle_test = new \Truck\Truck(); 
	   $_honk = "   ";
	   $this->assertEquals($vehicle_test->honk(), $_honk);
	}

}//END Class CarTest

?>