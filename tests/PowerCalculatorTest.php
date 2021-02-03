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

    /** @test */
    public function find_cost_from_watt_and_hours()
    {
        $powerCalculator = PowerCalculator::fromWattAndHours(1000, 10);

        $this->assertEquals(60, $powerCalculator->findCost(6.0));
    }
}
