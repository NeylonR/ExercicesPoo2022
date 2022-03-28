<?php

declare(strict_types=1);

namespace App\Models;

class Rectangle extends Shape
{
    public function __construct(protected float $edgeA, protected float $edgeB)
    {
    }

    public function perimeter(): float
    {
        return ($this->edgeA + $this->edgeB) * 2;
    }

    public function area(): float
    {
        return $this->edgeA * $this->edgeB;
    }
}