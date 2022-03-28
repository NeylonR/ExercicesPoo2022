<?php

declare(strict_types=1);

namespace App\Models;

abstract class Shape
{
    protected float $edge;

    abstract protected function perimeter(): float;
    abstract protected function area(): float;
}