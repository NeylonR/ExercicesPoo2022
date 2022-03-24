<?php

declare(strict_types=1);

namespace App\Calcul;

class Square extends Shape
{
    public function __construct(protected float $edge)
    {
    }

    public function perimeter(): float
    {
        return $this->edge * 4;
    }

    public function area(): float
    {
        return $this->edge * $this->edge;
    }
}