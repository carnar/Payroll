<?php 
namespace Payroll;

class IgssService implements FeeableInterface 
{
    /**
     * Constant for the IGSS percentage.
     */
    const IGSS_PERCENTAGE = 0.03;

    /**
     * Get IGSS fee for a specific amount.
     *
     * @param  float $amount
     * @return float
     */
    public function fee($amount)
    {
        return $amount * self::IGSS_PERCENTAGE;
    }
}
