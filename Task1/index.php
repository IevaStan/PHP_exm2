<?php
use PhpExam\Task1\Employee;
use PhpExam\Task1\Intern;
use PhpExam\Task1\Manager;

require_once "../vendor/autoload.php";

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