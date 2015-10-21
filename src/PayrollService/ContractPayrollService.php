<?php
namespace Payroll\PayrollService;

use Payroll\Employee\EmployeeInterface;
use Payroll\FeeService\EmployeeFeeInterface;

class ContractPayrollService implements PayrollServiceInterface
{
    /**
     * Instance of Fee Service for ISR
     * 
     * @var \Payroll\EmployeeFeeInterface
     */
    private $isrService;

    /**
     * Instance of Fee Service for Loan
     * 
     * @var \Payroll\EmployeeFeeInterface
     */
    private $loanService;

    /**
     * Create a instance.
     * 
     * @param \Payroll\FeeService\EmployeeFeeInterface
     * @param \Payroll\FeeService\EmployeeFeeInterface
     */
    public function __construct(EmployeeFeeInterface $isrService, EmployeeFeeInterface $loanService)
    {
        $this->isrService = $isrService;
        $this->loanService = $loanService;
    }

    /**
     * Calculate salary for a Contract Employee.
     * 
     * @param  \Payroll\Employee\EmployeeInterface
     * @return float
     */
    public function salary(EmployeeInterface $employee)
    {
        return $employee->getBaseSalary() - 
            $this->isrService->fee($employee) -
            $this->loanService->fee($employee);        
    }
}
