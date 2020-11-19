<?php

declare(strict_types=1);

namespace Test\NumbersMultiplier;

use PHPUnit\Framework\TestCase;
use TDD\NumbersMultiplier\NumbersMultiplier;

final class NumberMultiplierTest extends TestCase
{
    private $numberMultiplier;

    public function setUp(): void
    {
        $this->numberMultiplier = new NumbersMultiplier();
    }

    public function testMultiplicarPorCero(): void
    {

        // procesado
        $resultado = $this->numberMultiplier->multiply(5, 0);

        //assertion
        $this->assertEquals(0, $resultado);
    }

    public function testMultiplicarPorUno(): void
    {
        $resultado = $this->numberMultiplier->multiply(2, 1);

        $this->assertEquals(2, $resultado);
    }

    public function testMultiplicarPorEnteroPositivo(): void
    {
        $resultado = $this->numberMultiplier->multiply(2, 8);

        $this->assertEquals(16, $resultado);
    }
}