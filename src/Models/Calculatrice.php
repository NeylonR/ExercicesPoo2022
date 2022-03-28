<?php

declare(strict_types=1);

namespace App\Models;

class Calculatrice
{
    public function add(float $number1, float $number2): float
    {
        return $number1 + $number2;
    }

    public function sub(float $number1, float $number2): float
    {
        return $number1 - $number2;
    }

    public function multiply(float $number1, float $number2): float
    {
        return $number1 * $number2;
    }

    public function divide(float $number1, float $number2): float
    {
        return $number1 / $number2;
    }

    public function median(float $number1, float $number2): float
    {
        return ($number1 + $number2) / 2;
    }
}
