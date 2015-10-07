<?php 
namespace Payroll\FeeService;

use Payroll\Employee\EmployeeInterface;

/**
 * Fake
 */
class IsrService implements EmployeeFeeInterface 
{
    /**
     * Get *fake* ISR fee for a employee base salary.
     *
     * @param  \Payroll\Employee\EmployeeInterface $employee
     * @return float
     */
    public function fee(EmployeeInterface $employee)
    {
        // Repace for real implementation, maybe a query to salary db.
        return 30;
    }
}