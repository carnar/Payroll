<?php
use Payroll\RegularPayrollService;

class RegularPayrollServiceTest extends PHPUnit_Framework_TestCase 
{
    /**
     * @test
     */
    public function it_calculates_salary_for_a_regular_employee_whose_base_salary_is_1000()
    {
        $employeeMock = $this->getMock('Payroll\EmployeeInterface');
        $employeeMock->expects($this->once())
                        ->method('getBaseSalary')
                        ->will($this->returnValue(1000));

        $isrServiceMock = $this->getMock('Payroll\EmployeeFeeInterface');
        $isrServiceMock->expects($this->once())
                        ->method('fee')
                        ->will($this->returnValue(50));

        $loanServiceMock = $this->getMock('Payroll\EmployeeFeeInterface');
        $loanServiceMock->expects($this->once())
                        ->method('fee')
                        ->will($this->returnValue(100));

        $igssServiceMock = $this->getMock('Payroll\EmployeeFeeInterface');
        $igssServiceMock->expects($this->once())
                        ->method('fee')
                        ->will($this->returnValue(30)); 

        $payrollService = new RegularPayrollService(
                                    $isrServiceMock, 
                                    $igssServiceMock, 
                                    $loanServiceMock);
        $result = $payrollService->salary($employeeMock);

        $this->assertEquals(820, $result);
    }

    /**
     * @test
     */
    public function it_calculates_salary_for_a_regular_employee_whose_base_salary_is_5000()
    {
        $employeeMock = $this->getMock('Payroll\EmployeeInterface');
        $employeeMock->expects($this->once())
                        ->method('getBaseSalary')
                        ->will($this->returnValue(5000));

        $isrServiceMock = $this->getMock('Payroll\EmployeeFeeInterface');
        $isrServiceMock->expects($this->once())
                        ->method('fee')
                        ->will($this->returnValue(250));

        $loanServiceMock = $this->getMock('Payroll\EmployeeFeeInterface');
        $loanServiceMock->expects($this->once())
                        ->method('fee')
                        ->will($this->returnValue(0));

        $igssServiceMock = $this->getMock('Payroll\EmployeeFeeInterface');
        $igssServiceMock->expects($this->once())
                        ->method('fee')
                        ->will($this->returnValue(150)); 

        $payrollService = new RegularPayrollService(
                                    $isrServiceMock, 
                                    $igssServiceMock, 
                                    $loanServiceMock);
        $result = $payrollService->salary($employeeMock);

        $this->assertEquals(4600, $result);
    }
}