<?php
namespace Payroll;

class ContractPayrollService implements PayrollServiceInterface
{
    /**
     * Instance of Fee Service.
     * 
     * @var \Payroll\EmployeeFeeInterface
     */
    private $loanService;

    /**
     * Create a instance.
     * 
     * @param \Payroll\EmployeeFeeInterface
     */
    public function __construct(EmployeeFeeInterface $loanService)
    {
        $this->loanService = $loanService;
    }

    /**
     * Calculate salary for a Contract Employee.
     * 
     * @param  \Payroll\EmployeeInterface
     * @return float
     */
    public function salary(EmployeeInterface $employee)
    {
        return $employee->getBaseSalary() - $this->loanService->fee($employee);        
    }
}
