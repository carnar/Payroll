<?php 
namespace Payroll;

interface PayrollServiceInterface 
{
    /**
     * @param  \Payroll\EmployeeInterface
     * @return float
     */
    public function salary(EmployeeInterface $employee);
}