WebLAMP 442 Assignment 1-2   README
============


***NOTE JAY pointed out I need to modify the "VAR" variables in the Car, Civic, Vehicle and Truck classes to work as protected ****  
--------

1. Demonstrates STRATEGY Design Pattern
2. Demonstrates PHP Unit Test

---
Server Environment Requirements
--------
*	[PHP Composer](http://getcomposer.org/ "Title")
	*	AUTOLOADs Classes 
	*	Package Dependency Manager
	
---

File Structure
--------
*	Src/
	*	index.php - Test File
	*	Vehicle/
		 *	Vehicle.php
		 *	VehicleInterface.php
		 *	Car.php
		 *	Civic.php
		 *	Truck.php
*	Tests/
	*	test_boostrap.php (Sets Test Error Environment)
	*	Conf/
		*	phpunit.xml  (Unit Testing Config) 
	*	Src/
		*	Vehicle/
			 *	CarTest.php
			 *	CivicTest.php
			 *	TruckTest.php
	*	_[[code\_coverage\_report]]_/ - _.gitignored_ 
		*	_(Used for Unit Testing Output)_ 
*	_[[Vendors]]_/ -  _.gitignored_
	*	_(Used for Composer Autoload and Packages)_
*	composer.json
*	bootstrap.php
*	README.md (this document)

