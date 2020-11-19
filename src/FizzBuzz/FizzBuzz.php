<?php

declare(strict_types=1);

namespace TDD\FizzBuzz;

final class FizzBuzz
{
    public function evaluate(int $number): string
    {
        if ($number < 1 || $number > 100)
            throw new \Exception("Numero no valido");

        if (($number % 3 == 0) && ($number % 5 == 0))
            return "FizzBuzz";

        if ($number % 3 == 0)
            return "Fizz";

        if ($number % 5 == 0)
            return "Buzz";

        return (string) $number;
    }
}