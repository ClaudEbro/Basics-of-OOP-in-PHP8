<?php

namespace Class\Dependancy_Injection;

class TaxCalculator
{
    public function calculate(int|float $price): int|float
    {
        return $price*1.4;
    }
} 