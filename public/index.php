<?php

declare(strict_types=1);

use App\Zoo\Poisson;
use App\Zoo\Oiseau;
use App\Calcul\Calculatrice;
use App\Calcul\Rectangle;
use App\Calcul\Square;
use App\Calcul\TriangleEquilateral;

    spl_autoload_register(function ($class) {
        $class = str_replace('\\', '/', $class);
        $path = '../'.str_replace('App', 'src', $class).'.php';

        require $path;
    });

    $router = new \App\Router();
    
    $router->register('/', function(){ require ('../views/homepage.php');})
           ->register('/oiseau', function(){ 
                $oiseau = new Oiseau('oiseau','jeanOiseau');
                require_once ('../views/oiseau.php');
            })
            ->register('/observeOiseau', function(){ 
                $oiseau = new Oiseau('oiseau','jeanOiseau');
                require_once ('../views/observeOiseau.php');
            })
            ->register('/catchOiseau', function(){ 
                $oiseau = new Oiseau('oiseau','jeanOiseau');
                require_once ('../views/catchOiseau.php');
            })
            ->register('/identifyOiseau', function(){ 
                $oiseau = new Oiseau('oiseau','jeanOiseau');
                require_once ('../views/identifyOiseau.php');
            })
           ->register('/poisson', function(){ 
                $poisson = new poisson('poisson','jeanPoisson');
                require_once ('../views/poisson.php');
            })
            ->register('/observePoisson', function(){ 
                $poisson = new poisson('poisson','jeanPoisson');
                require_once ('../views/observePoisson.php');
            })
            ->register('/catchPoisson', function(){ 
                $poisson = new poisson('poisson','jeanPoisson');
                require_once ('../views/catchPoisson.php');
            })
            ->register('/identifyPoisson', function(){ 
                $poisson = new Poisson('poisson','jeanPoisson');
                require_once ('../views/identifyPoisson.php');
            })
            ->register('/calculatrice', function(){ 
                $calculatrice = new Calculatrice();
                require_once ('../views/calculatrice.php');
            })
            ->register('/shape', function(){ 
                if(isset($_POST) && !empty($_POST)){
                    $edgeA = floatval($_POST['edgeA']);
                    $edgeB = floatval($_POST['edgeB']);
                    if($_POST['shape'] == 'square' && $edgeA > 0){
                        $square = new Square($edgeA); 
                    } else if($_POST['shape'] == 'rectangle' && $edgeA > 0 && $edgeB > 0){
                        $rectangle = new Rectangle($edgeA, $edgeB);
                    } else if($_POST['shape'] == 'triangleEquilateral' && $edgeA > 0){
                        $triangleEquilateral = new TriangleEquilateral($edgeA);
                    }    
                }
                require_once ('../views/shape.php');
            });

    echo $router->resolve($_SERVER['REQUEST_URI']);
