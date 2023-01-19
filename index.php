<?php

include_once "Employee.php";
include_once "Intern.php";
include_once "Manager.php";

$intern = new Intern("Jonas Jonaitis", 3450);
echo $intern. PHP_EOL;
echo $intern->calculateSalary() . PHP_EOL;
echo Intern::getTypeDescription() . PHP_EOL;

$manager = new Manager("Petra Petraitienė", 3600, 60);
echo $manager. PHP_EOL;
echo $manager->calculateSalary() . PHP_EOL;
echo Manager::getTypeDescription() . PHP_EOL;

$intern2 = clone $intern;
echo $intern2. PHP_EOL;
echo $intern2->calculateSalary() . PHP_EOL;
echo Intern::getTypeDescription() . PHP_EOL;