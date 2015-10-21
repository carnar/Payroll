<?php 
use Payroll\PayrollService\ContractPayrollService;

class ContractPayrollServiceTest extends PHPUnit_Framework_TestCase 
{
    /**
     * @test
     */
    public function it_calculates_salary_for_contract_employee_who_earn_a_base_salary_of_1000()
    {
        $employeeMock = $this->getMock('Payroll\Employee\EmployeeInterface');
        $employeeMock->expects($this->once())
                        ->method('getBaseSalary')
                        ->will($this->returnValue(1000));
        $isrServiceMock = $this->getMock('Payroll\FeeService\EmployeeFeeInterface');
        $isrServiceMock->expects($this->once())
                        ->method('fee')
                        ->will($this->returnValue(50));
        $loanServiceMock = $this->getMock('Payroll\FeeService\EmployeeFeeInterface');
        $loanServiceMock->expects($this->once())
                    ->method('fee')
                    ->will($this->returnValue(50));

        $payrollService = new ContractPayrollService($isrServiceMock, 
            $loanServiceMock);
        $result = $payrollService->salary($employeeMock);

        $this->assertEquals(900, $result);
    }

    /**
     * @test
     */
    public function it_calculates_salary_for_contract_employee_who_earn_a_base_salary_of_5000()
    {
        $employeeMock = $this->getMock('Payroll\Employee\EmployeeInterface');
        $employeeMock->expects($this->once())
                        ->method('getBaseSalary')
                        ->will($this->returnValue(5000));
        $isrServiceMock = $this->getMock('Payroll\FeeService\EmployeeFeeInterface');
        $isrServiceMock->expects($this->once())
                        ->method('fee')
                        ->will($this->returnValue(150));
        $loanServiceMock = $this->getMock('Payroll\FeeService\EmployeeFeeInterface');
        $loanServiceMock->expects($this->once())
                    ->method('fee')
                    ->will($this->returnValue(750));

        $payrollService = new ContractPayrollService($isrServiceMock, $loanServiceMock);
        $result = $payrollService->salary($employeeMock);

        $this->assertEquals(4100, $result);
    }

    /**
     * @test
     */
    public function it_calculates_salary_for_contract_employee_who_earn_a_base_salary_of_3500()
    {
        $employeeMock = $this->getMock('Payroll\Employee\EmployeeInterface');
        $employeeMock->expects($this->once())
                        ->method('getBaseSalary')
                        ->will($this->returnValue(3500));
        $isrServiceMock = $this->getMock('Payroll\FeeService\EmployeeFeeInterface');
        $isrServiceMock->expects($this->once())
                        ->method('fee')
                        ->will($this->returnValue(100));
        $loanServiceMock = $this->getMock('Payroll\FeeService\EmployeeFeeInterface');
        $loanServiceMock->expects($this->once())
                    ->method('fee')
                    ->will($this->returnValue(0));

        $payrollService = new ContractPayrollService($isrServiceMock, $loanServiceMock);
        $result = $payrollService->salary($employeeMock);

        $this->assertEquals(3400, $result);
    }
}