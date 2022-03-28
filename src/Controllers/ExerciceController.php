<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\Square;
use App\Models\Oiseau;
use App\Models\Poisson;
use App\Models\Rectangle;
use App\Models\Calculatrice;
use App\Models\TriangleEquilateral;

class ExerciceController
{
    public function index(): string
    {
        return (new \App\View('homepage'))->render();
    }

    public function oiseau(): string
    {
        $oiseau = new Oiseau('oiseau','jeanOiseau');
        return (new \App\View('oiseau', ['oiseau' => $oiseau]))->render();
    }

    public function observeOiseau(): string
    {
        $oiseau = new Oiseau('oiseau','jeanOiseau');
        return (new \App\View('observeOiseau', ['oiseau' => $oiseau]))->render();
    }

    public function catchOiseau(): string
    {
        $oiseau = new Oiseau('oiseau','jeanOiseau');
        return (new \App\View('catchOiseau', ['oiseau' => $oiseau]))->render();
    }

    public function identifyOiseau(): string
    {
        $oiseau = new Oiseau('oiseau','jeanOiseau');
        return (new \App\View('identifyOiseau', ['oiseau' => $oiseau]))->render();
    }

    public function poisson(): string
    {
        $poisson = new Poisson('poisson','jeanPoisson');
        return (new \App\View('poisson', ['poisson' => $poisson]))->render();
    }

    public function observePoisson(): string
    {
        $poisson = new Poisson('poisson','jeanPoisson');
        return (new \App\View('observePoisson', ['poisson' => $poisson]))->render();
    }

    public function catchPoisson(): string
    {
        $poisson = new Poisson('poisson','jeanPoisson');
        return (new \App\View('catchPoisson', ['poisson' => $poisson]))->render();
    }

    public function identifyPoisson(): string
    {
        $poisson = new Poisson('poisson','jeanPoisson');
        return (new \App\View('identifyPoisson', ['poisson' => $poisson]))->render();
    }

    public function calculatrice(): string
    {
        return (new \App\View('calculatrice'))->render();
    }

    public function calculatriceCalcul(): string
    {
        $calculatrice = new Calculatrice();

        if(isset($_POST) && !empty($_POST)){
            $number1 = floatval($_POST['number1']);
            $number2 = floatval($_POST['number2']);

            if($_POST['operation'] == 'add'){
                $result = $calculatrice->add($number1, $number2);
            } else if($_POST['operation'] == 'sub'){
                $result = $calculatrice->sub($number1, $number2);
            } else if($_POST['operation'] == 'multiply'){
                $result = $calculatrice->multiply($number1, $number2);
            } else if($_POST['operation'] == 'divide'){
                $result = $calculatrice->divide($number1, $number2);
            } else if($_POST['operation'] == 'median'){
                $result = $calculatrice->median($number1, $number2);
            } else{
                echo 'Il y a eu une erreur.';
            }
        }
        return (new \App\View('calculatrice', ['calculatrice' => $calculatrice, 'result' => $result]))->render();
    }

    public function shape(): string
    {
        return (new \App\View('shape'))->render();
    }

    public function shapeCalcul(): string
    {

        if(isset($_POST) && !empty($_POST)){
            $edgeA = floatval($_POST['edgeA']);
            $edgeB = floatval($_POST['edgeB']);
            if($_POST['shape'] == 'square' && $edgeA > 0){
                $square = new Square($edgeA);
                if($_POST['math'] == 'perimeter'){
                    $result = "Le périmetre d'un carré dont les bords sont de ".$edgeA."cm est égal à ". $square->perimeter()."cm";
                } else if($_POST['math'] == 'area'){
                    $result = "L'aire du carré dont les bords sont de ".$edgeA."cm est égal à ".$square->area()."cm².";
                } else{
                    $result = 'erreur';
                } 
            } else if($_POST['shape'] == 'rectangle' && $edgeA > 0 && $edgeB > 0){
                $rectangle = new Rectangle($edgeA, $edgeB);
                if($_POST['math'] == 'perimeter'){
                    $result = "Le périmetre d'un rectangle dont les bords sont de ".$edgeA."cm et ".$edgeB."cm est égal à ". $rectangle->perimeter()."cm";
                } else if($_POST['math'] == 'area'){
                    $result = "L'aire du rectangle dont les bords sont de ".$edgeA."cm et ".$edgeB."cm est égal à ".$rectangle->area()."cm².";
                } else{
                    $result = 'erreur';
                }
            } else if($_POST['shape'] == 'triangleEquilateral' && $edgeA > 0){
                $triangleEquilateral = new TriangleEquilateral($edgeA);
                if($_POST['math'] == 'perimeter'){
                    $result = "Le périmetre d'un triangle équilatéral dont les bords sont de ".$edgeA."cm est égal à ". $triangleEquilateral->perimeter()."cm";
                } else if($_POST['math'] == 'area'){
                    $result = "L'aire du triangle équilatéral dont les bords sont de ".$edgeA."cm est égal à ".$triangleEquilateral->area()."cm².";
                } else{
                    $result = 'erreur';
                }
            } else{
                $result = 'Erreur lors de la complétion des champs.';
            }       
        }
        return (new \App\View('shape', ['result' => $result]))->render();
    }

}

?>