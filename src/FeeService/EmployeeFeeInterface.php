<?php 
namespace Payroll\FeeService;

use Payroll\Employee\EmployeeInterface;

interface EmployeeFeeInterface  
{
    /**
     * Get fee for specific employee.
     *
     * @param  \Payroll\Employee\EmployeeInterface $employee
     * @return float
     */
    public function fee(EmployeeInterface $employee);
}