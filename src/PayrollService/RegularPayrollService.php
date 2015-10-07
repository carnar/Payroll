<?php
namespace Payroll\PayrollService;

use Payroll\Employee\EmployeeInterface;
use Payroll\FeeService\EmployeeFeeInterface;
use Payroll\FeeService\FeeableInterface;

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
     * @param \Payroll\FeeService\FeeableInterface $igssService
     * @param \Payroll\FeeService\EmployeeFeeInterface $loanService
     */
    public function __construct(EmployeeFeeInterface $isrService, 
                                FeeableInterface $igssService, 
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
                $this->igssService->fee($employee->getBaseSalary()) -
                $this->loanService->fee($employee);
    }
}

