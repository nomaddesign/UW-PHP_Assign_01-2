<?php

// namespace Car; 

require_once __DIR__.'/../../test_bootstrap.php';


/**
* unit test code to test Car object class
*/
class CarTest extends \PHPUnit_Framework_TestCase {

	/**
	 * tests car::getNumberOfDoors
	 */
	public function testGetNumberOfDoors() {
		$vehicle_test = new \Car\Car();
		$doors_num = 4;
		$this->assertEquals($vehicle_test->getNumberOfDoors(), $doors_num);
	} 

	/*
	 * tests car::getName
	 */
	public function testGetName() {
		$vehicle_test = new \Car\Car();
		$_name = "Car";
		$this->assertEquals($vehicle_test->getName(), $_name);
	}

	/**
	 * tests car::getYear
	 */
	public function testGetYear() {
		$vehicle_test = new \Car\Car();
		$_year = 2001;
		$this->assertEquals($vehicle_test->getYear(),$_year);
	}

	/**
	 * tests car::setYear
	 */
	public function testSetYear() {
	   $vehicle_test = new \Car\Car();
	   $_year = 2013;
	   $vehicle_test->setYear($_year);
	   $this->assertEquals($vehicle_test->getYear(), $_year);
	}

	/**
	 * tests car::honk
	 */
	public function testHonk() {
	   $vehicle_test = new \Car\Car(); 
	   $_honk = "   ";
	   $this->assertEquals($vehicle_test->honk(), $_honk);
	}

}//END Class CarTest

?>