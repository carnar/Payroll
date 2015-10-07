<?php
namespace Payroll\PayrollService;

use Payroll\FeeService\EmployeeFeeInterface;
use Payroll\Employee\EmployeeInterface;

class RegularPayrollService implements PayrollServiceInterface 
{
    /**
     * ISR Service instance.
     *
     * @var \Payroll\FeeService\EmployeeFeeInterface
     */
    private $isrService;

    /**
     * IGSS Service instance.
     *
     * @var \Payroll\FeeService\EmployeeFeeInterface
     */
    private $igssService;

    /**
     * Loan Service instance.
     *
     * @var \Payroll\FeeService\EmployeeFeeInterface
     */
    private $loanService;

    /**
     * Make instance of Regular Payroll Service.
     *
     * @param \Payroll\FeeService\EmployeeFeeInterface $isrService
     * @param \Payroll\FeeService\EmployeeFeeInterface $igssService
     * @param \Payroll\FeeService\EmployeeFeeInterface $loanService
     */
    public function __construct(EmployeeFeeInterface $isrService, 
                                EmployeeFeeInterface $igssService, 
                                EmployeeFeeInterface $loanService)
    {
        $this->isrService = $isrService;
        $this->igssService = $igssService;
        $this->loanService = $loanService;
    }

    /**
     * Calculate employee salary.
     *
     * @param  \Payroll\Employee\EmployeeInterface $employee
     * @return float
     */
    public function salary(EmployeeInterface $employee)
    {
        return $employee->getBaseSalary() - 
                $this->isrService->fee($employee) -
                $this->igssService->fee($employee) -
                $this->loanService->fee($employee);
    }
}

