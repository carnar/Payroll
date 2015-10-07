<?php 
namespace Payroll\Employee;

use Payroll\Employee\EmployeeInterface;

class Employee implements EmployeeInterface 
{
    /**
     * Employee ID
     *
     * @var string
     */
    private $id;

    /**
     * Employee's name.
     *
     * @var string
     */
    public $name;

    /**
     * Employee's base salary.
     *
     * @var float
     */
    private $baseSalary;

    /**
     * Employee type.
     *
     * @var string
     */
    private $type;

    /**
     * Make instance of Employee.
     *
     * @param string $id
     * @param string $name
     * @param float $baseSalary
     * @param string $type
     */
    public function __construct($id, $name, $baseSalary, $type)
    {
        $this->id = $id;
        $this->name = $name;
        $this->baseSalary = $baseSalary;
        $this->type = $type;
    }

    /**
     * Get employee's base salary.
     *
     * @return float
     */
    public function getBaseSalary()
    {
        return $this->baseSalary;
    }

    /**
     * Get employee type.
     *
     * @return string
     */
    public function type()
    {
        return $this->type;
    }
}