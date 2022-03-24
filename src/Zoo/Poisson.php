<?php
declare(strict_types=1);

namespace App\Zoo;

class Poisson extends Animal
{
    protected string $locomotion = 'nager';

    public function eat(): string
    {
        return 'mange des algues';
    }

    public function rest()
    {
        return "un ".$this->race." qui se prélasse sous l'eau d'un petit étang.";
    }
}