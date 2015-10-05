<?php 

interface EmployeeInterface
{
    /**
     * Get employee type. Could be Regular or Contract
     *
     * @return string
     */
    public function type();
}