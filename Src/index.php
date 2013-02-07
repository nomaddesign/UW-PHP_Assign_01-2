<?php

//Primative Testing File 

//Used to intiate dorky testing method
$test_mode = "on";

if ($test_mode == "on"){
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
}

//Bootstap Class Map 
require_once __DIR__ . '/../bootstrap.php';


/*
*  Create Car, Truck and Civic objects
*  and Test that methods are returing correct values
*/

echo '<pre>';
$BMW_E30 = new \Car\Car();
$BMW_E30->setYear(1991);
// var_dump($BMW_E30);
	var_dump($BMW_E30->getName());
	var_dump($BMW_E30->getYear());
	var_dump($BMW_E30->getNumberOfDoors());
	var_dump($BMW_E30->honk());
echo PHP_EOL;
$myTruck = new \Truck\Truck();
$myTruck->setYear(2010);
// var_dump($myTruck);
	var_dump($myTruck->getName());
	var_dump($myTruck->getYear());
	var_dump($myTruck->getNumberOfDoors());
	var_dump($myTruck->honk());
	echo PHP_EOL;
$myCivic = new \Civic\Civic();
$myCivic->setYear(2014);
// var_dump($myCivic);
	var_dump($myCivic->getName());
	var_dump($myCivic->getYear());
	var_dump($myCivic->getNumberOfDoors());
	var_dump($myCivic->honk());
echo '</pre>';

?>