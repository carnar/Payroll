<?php 
namespace Payroll;

interface EmployeeInterface
{
    /**
     * Get employee type. Could be Regular or Contract
     *
     * @return string
     */
    public function type();

    /**
     * Set base salary with amount given.
     * 
     */
    public function setBaseSalary($amount);

    /**
     * Get base salary.
     */
    public function getBaseSalary();
}