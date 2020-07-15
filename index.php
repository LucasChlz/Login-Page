<?php

require __DIR__ ."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL);

$router->namespace("App\Controllers");

$router->group('/');
$router->get('/', 'LoginController:index');

$router->group('/error');
$router->get('/', function() {
    echo 'error';
});

$router->dispatch();