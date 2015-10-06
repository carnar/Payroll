<?php

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
                        ->will($this->returnValue(50))
        $loanServiceMock = $this->getMock('Payroll\EmployeeFeeInterface');
        $loanServiceMock->expects($this->once())
                            ->method('fee')
                            ->will($this->returnValue(100));
        $loanServiceMock = $this->expects($this->once())
                                ->method('fee')
                                ->will($this->returnValue(200)); 

                                
    }
}