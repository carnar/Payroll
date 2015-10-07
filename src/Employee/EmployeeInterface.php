<?php 
namespace Payroll\Employee;

interface EmployeeInterface
{
    /**
     * Get employee type. Could be Regular or Contract
     *
     * @return string
     */
    public function type();

    /**
     * Get base salary.
     */
    public function getBaseSalary();
}