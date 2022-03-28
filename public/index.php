<?php

declare(strict_types=1);

$root = dirname(__DIR__).DIRECTORY_SEPARATOR;
define('VIEWS_PATH', $root.'views'.DIRECTORY_SEPARATOR);

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    $path = '../'.str_replace('App', 'src', $class).'.php';

    require $path;
});

$router = new \App\Router();

$router->get('/', [App\Controllers\ExerciceController::class, 'index'])
        ->get('/oiseau', [App\Controllers\ExerciceController::class, 'oiseau'])
        ->get('/observeOiseau', [App\Controllers\ExerciceController::class, 'observeOiseau'])
        ->get('/catchOiseau', [App\Controllers\ExerciceController::class, 'catchOiseau'])
        ->get('/identifyOiseau', [App\Controllers\ExerciceController::class, 'identifyOiseau'])
        ->get('/poisson', [App\Controllers\ExerciceController::class, 'poisson'])
        ->get('/observePoisson', [App\Controllers\ExerciceController::class, 'observePoisson'])
        ->get('/catchPoisson', [App\Controllers\ExerciceController::class, 'catchPoisson'])
        ->get('/identifyPoisson', [App\Controllers\ExerciceController::class, 'identifyPoisson'])
        ->get('/calculatrice', [App\Controllers\ExerciceController::class, 'calculatrice'])
        ->post('/calculatrice', [App\Controllers\ExerciceController::class, 'calculatriceCalcul'])
        ->get('/shape', [App\Controllers\ExerciceController::class, 'shape'])
        ->post('/shape', [App\Controllers\ExerciceController::class, 'shapeCalcul']);

echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
