<?php 
namespace Payroll\Employee;

use Payroll\EmployeeInterface;

class Employee implements EmployeeInterface 
{
    private $id;
    private $name;
    private $baseSalary;
    private $type;

    public function __construct($id, $name, $baseSalary, $type)
    {
        $this->id = $id;
        $this->name = $name;
        $this->baseSalary = $baseSalary;
        $this->type = $type;
    }

    public function getBaseSalary()
    {
        return $this->baseSalary;
    }

    public function type()
    {
        return $this->type;
    }
}