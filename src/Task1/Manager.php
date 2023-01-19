<?php
namespace PhpExam\Task1;

class Manager extends Employee {
    public const EMPLOYEE_TYPE = 2;
    protected int $owertimeHours;


public function __construct(string $name, float $salary, int $owertimeHours)
{
    $this->owertimeHours = $owertimeHours;
    parent::__construct($name, $salary);
}

public function calculateSalary(): float 
{
    return $this->salary + ($this->salary / 40 * $this->owertimeHours) * 2;
}

}