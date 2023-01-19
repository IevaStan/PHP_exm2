<?php

include_once "Employee.php";
include_once "Intern.php";
include_once "Manager.php";



// - Getter ir Setter turi būti sukurtas experience properčiui. [0.25 balo]
// - Getter methodas turi būti sukurtas id properčiui [0.25 balo]
// - Metodas public calculateSalary() turi grąžinti salary reikšmę [0.5 balo]
// - Magic methodas toString turi grąžinti string: "Darbuotojas {id}: {name} - {salary} EUR" [0.25 balo]
// - Magic methodas clone turi pakeisti id verte į 0 [0.25 balo]
// - static methodas getTypeDescription() gražina string "Darbuotojo tipas {constantos verte}" [0.5 balo]


// Intern.php turi extendinti Employee klasę ir viskas: [0.25 balo]

// Manager.php turi extendinti Employee klasę: [1 balas]
// - constantos EMPLOYEE_TYPE reksme turi būti 2.
// - papildomas propertis owertimeHours
// - construktorius turi priimti dar papildomai owertimeHours, nepamirškite extendinti ir parent construktoriaus;
// - Perrašykite calculateSalary() funkciją. Suskaičiuokite atlyginima: salary + (salary / 40 *  owertimeHours) * 2;


// Sukurkite Intern ir Manager objektus.    [0.5 balo]
// Išspausdinkite tiesiogiai abu objektus
// Išveskite jų atlyginimus.
// Išveskite getTypeDescription;
// Paklonuokite intern sukurtą objektą