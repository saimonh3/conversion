<?php
declare(strict_types=1);

namespace Saimonh3\Conversion;

class Weight
{
    private float $unit;

    public static function fromKilo(float $kilogram): self
    {
        return new static($kilogram);
    }

    public function __construct(float $unit)
    {
        $this->unit = $unit;
    }

    public function pound(): float
    {
        return $this->unit * 2.2046244202;
    }

    public static function fromPound(float $pound): self
    {
        return new static($pound);
    }

    public function kilo(): float
    {
        return $this->unit * 0.453592;
    }
}
