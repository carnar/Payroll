<?php 

interface EmployeeFeeInterface  
{
    /**
     * Get fee for specific employee.
     *
     * @param  Employee $employee
     * @return float
     */
    public function fee(Employee $employee);
}