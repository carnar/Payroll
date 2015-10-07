<?php
namespace Payroll;

class RegularPayrollService implements PayrollServiceInterface 
{
    /**
     * ISR Service instance.
     *
     * @var \Payroll\EmployeeFeeInterface
     */
    private $isrService;

    /**
     * IGSS Service instance.
     *
     * @var \Payroll\EmployeeFeeInterface
     */
    private $igssService;

    /**
     * Loan Service instance.
     *
     * @var \Payroll\EmployeeFeeInterface
     */
    private $loanService;

    /**
     * Make instance of Regular Payroll Service.
     *
     * @param \Payroll\EmployeeFeeInterface $isrService
     * @param \Payroll\EmployeeFeeInterface $igssService
     * @param \Payroll\EmployeeFeeInterface $loanService
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
     * @param  \Payroll\EmployeeInterface $employee
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
