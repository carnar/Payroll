<?php

class RegularPayrollServiceTest extends PHPUnit_Framework_TestCase 
{
    /**
     * @test
     */
    public function it_calculates_salary_for_a_regular_employee_who_earns_1000()
    {
        $employeeMock = $this->getMock('Payroll\EmployeeInterface');
    }
}