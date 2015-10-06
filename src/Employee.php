<?php 
namespace Payroll;

use Payroll\EmployeeInterface;

class Employee implements EmployeeInterface 
{
    public $id;

    public $name;

    private $baseSalary;

    public function setBaseSalary($amount)
    {
        $this->baseSalary = $amount;
    }

    public function getBaseSalary()
    {
        return $this->baseSalary;
    }

    public function type()
    {
        return 'contract';
    }
}