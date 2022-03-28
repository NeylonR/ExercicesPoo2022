<?php
declare(strict_types=1);

namespace App\Models;

class Oiseau extends Animal
{
    protected string $locomotion = 'voler';

    public function eat(): string
    {
        return 'mange des graines';
    }

    public function rest()
    {
        return "un ". $this->race." qui se prélasse au soleil sous les feuilles d'un chêne.";
    }
}