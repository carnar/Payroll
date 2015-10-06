<?php 
use Payroll\IgssService;

class IgssServiceTest extends PHPUnit_Framework_TestCase 
{
    /**
     * @test
     */
    public function it_calculates_igss_fee_when_amount_is_100()
    {
        $igssService = new IgssService();
        $amount = 100;

        $result = $igssService->fee($amount);
        $expected = 3.00;

        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function it_calculates_igss_fee_when_amount_is_200()
    {
        $igssService = new IgssService();
        $amount = 200;

        $result = $igssService->fee($amount);
        $expected = 6.00;

        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function it_calculates_igss_fee_when_amount_is_500()
    {
        $igssService = new IgssService();
        $amount = 500;

        $result = $igssService->fee($amount);
        $expected = 15.00;

        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function it_calculates_igss_fee_when_amount_is_zero()
    {
        $igssService = new IgssService();
        $amount = 0;

        $result = $igssService->fee($amount);
        $expected = 0.00;

        $this->assertEquals($expected, $result);
    }    

    /**
     * @test
     */
    public function it_calculates_igss_fee_when_amount_is_35000()
    {
        $igssService = new IgssService();
        $amount = 35000;

        $result = $igssService->fee($amount);
        $expected = 1050.00;

        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function it_calculates_igss_fee_when_amount_is_85()
    {
        $igssService = new IgssService();
        $amount = 85;

        $result = $igssService->fee($amount);
        $expected = 2.55;

        $this->assertEquals($expected, $result);
    }    

}