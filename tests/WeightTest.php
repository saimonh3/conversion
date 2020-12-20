<?php
declare(strict_types=1);

namespace Saimonh3\Conversion\Tests;

use PHPUnit\Framework\TestCase;
use Saimonh3\Conversion\Weight;

class WeightTest extends TestCase
{
    /**
     * @test
     */
    public function this_should_return_kilogram_to_pound()
    {
        self::assertEquals(2.2046244202, Weight::fromKilo(1)->pound());
    }

    /**
     * @test
     */
    public function this_should_return_pound_to_kilogram()
    {
        self::assertEquals(4.53592, Weight::fromPound(10)->kilo());
    }
}
