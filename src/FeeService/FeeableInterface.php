<?php 
namespace Payroll\FeeService;

interface FeeableInterface 
{
    /**
     * Calculate fee for a specific amount.
     *
     * @param  float $baseSalary
     * @return float
     */
    public function fee($amount);
}