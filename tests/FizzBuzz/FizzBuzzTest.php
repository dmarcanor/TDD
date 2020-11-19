<?php

declare(strict_types=1);

namespace Test\FizzBuzz;

use http\Exception;
use PHPUnit\Framework\TestCase;
use TDD\FizzBuzz\FizzBuzz;

final class FizzBuzzTest extends TestCase
{
    public function testMultiplosDeTres(): void
    {
        $fizzBuzz = new FizzBuzz();

        foreach ([3, 6, 9] as $number) {
            $this->assertEquals('Fizz', $fizzBuzz->evaluate($number));
        }
    }

    public function testMultiplosDeCinco(): void
    {
        $fizzBuzz = new FizzBuzz();

        foreach ([5, 10] as $number) {
            $this->assertEquals('Buzz', $fizzBuzz->evaluate($number));
        }
    }

    public function testMultiplosDeTresYCinco(): void
    {
        $fizzBuzz = new FizzBuzz();

        foreach ([15, 30] as $number) {
            $this->assertEquals('FizzBuzz', $fizzBuzz->evaluate($number));
        }
    }

    public function testNumeroNoMultiploDeTresNiDeCinco(): void
    {
        $fizzBuzz = new FizzBuzz();

        foreach ([2, 4, 8] as $number) {
            $this->assertEquals($number, $fizzBuzz->evaluate($number));
        }
    }

    public function testNumeroNoValido(): void
    {
        $fizzBuzz = new FizzBuzz();

        foreach ([-1, 105] as $number) {
            $this->expectException(\Exception::class);

            $this->assertEquals('FizzBuzz', $fizzBuzz->evaluate($number));
        }
    }
}