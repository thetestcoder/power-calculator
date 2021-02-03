<?php

namespace TheTestCoder\PowerCalculator;

class PowerCalculator
{
    private float $watt;
    private float $hours;

    /**
     * @param float $watt
     * @param float $hours
     * @return static
     */
    public static function fromWattAndHours(float $watt, float $hours): self
    {
        return new static($watt, $hours);
    }

    /**
     * PowerCalculator constructor.
     * @param float $watt
     * @param float $hours
     */
    public function __construct(float $watt, float $hours)
    {
        $this->watt = $watt;
        $this->hours = $hours;
    }

    /**
     * @return float
     */
    public function intoKWH(): float
    {
        return ($this->watt * $this->hours) / 1000;
    }

    /**
     * @param float $per_unit_cost
     * @return float
     */
    public function findCost(float $per_unit_cost): float
    {
        return $this->intoKWH() * $per_unit_cost;
    }
}
