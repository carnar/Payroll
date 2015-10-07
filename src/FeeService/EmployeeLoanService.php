<?php
namespace Payroll\FeeService;

use Payroll\Employee\EmployeeInterface;

class EmployeeLoanService implements EmployeeFeeService 
{
    public function fee(EmployeeInterface $employee)
    {
        return 69;
    }
}
