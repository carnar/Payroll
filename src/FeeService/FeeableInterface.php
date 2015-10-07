<?php 
namespace Payroll\FeeService;

interface FeeableInterface 
{
    /**
     * Calculate fee for a specific amount.
     *
     * @param  float $amount
     * @return float
     */
    public function fee($amount);
}