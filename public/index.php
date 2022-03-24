<?php

declare(strict_types=1);

use App\Zoo\Poisson;
use App\Zoo\Oiseau;
use App\Calcul\Calculatrice;

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
            });

    echo $router->resolve($_SERVER['REQUEST_URI']);
