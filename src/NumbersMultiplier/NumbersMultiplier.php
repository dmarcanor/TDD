<?php

declare(strict_types=1);

namespace TDD\NumbersMultiplier;

final class NumbersMultiplier
{
    public function multiply(float $num1, float $num2): float
    {
        $result = 0;

        if ($num1 == 0 || $num2 == 0)
            return $result;

        for ($i = 0; $i < $num1; $i++) {
            $result += $num2;
        }

        return $result;
    }
}