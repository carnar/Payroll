<?php
namespace Payroll\FeeService;

use Payroll\Employee\EmployeeInterface;

/**
 * Fake
 */
class EmployeeLoanService implements EmployeeFeeInterface
{
    /**
     * Get fake loan fee for a employee base salary.
     *
     * @param  \Payroll\Employee\EmployeeInterface $employee
     * @return float
     */
    public function fee(EmployeeInterface $employee)
    {
        // Replace for real implementation, maybe a query to loan db.
        return 50;
    }
}
