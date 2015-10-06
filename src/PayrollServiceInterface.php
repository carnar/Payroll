<?php 
namespace Payroll;

use Payroll\EmployeeInterface;

interface PayrollServiceInterface 
{
    /**
     * @param  \Payroll\EmployeeInterface
     * @return float
     */
    public function salary(EmployeeInterface $employee);
}