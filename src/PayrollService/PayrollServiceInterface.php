<?php 
namespace Payroll\PayrollService;

use Payroll\Employee\EmployeeInterface;

interface PayrollServiceInterface 
{
    /**
     * @param  \Payroll\Employee\EmployeeInterface
     * @return float
     */
    public function salary(EmployeeInterface $employee);
}