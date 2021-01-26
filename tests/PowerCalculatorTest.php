<?php


namespace TheTestCoder\PowerCalculator\Tests;


use PHPUnit\Framework\TestCase;
use TheTestCoder\PowerCalculator\PowerCalculator;

class PowerCalculatorTest extends TestCase
{
    /** @test */
    public function convert_watt_and_hours_into_kwh()
    {
        $powerCalculator = PowerCalculator::fromWattAndHours(1000, 10);

        $this->assertEquals(10, $powerCalculator->intoKWH());
    }
}
