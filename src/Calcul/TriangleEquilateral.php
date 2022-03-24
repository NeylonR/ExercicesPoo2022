<?php

declare(strict_types=1);

namespace App\Calcul;

class TriangleEquilateral extends Shape
{
    public function __construct(protected float $edge)
    {
    }

    public function perimeter(): float
    {
        return $this->edge * 3;
    }

    public function area(): float
    {
        $a = $this->edge;
        $b = $this->edge/2;
        $height = ($a*$a) - ($b*$b);
        return ($a * sqrt($height)) /2;
    }
}