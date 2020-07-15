<?php

require __DIR__ ."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL);

$router->namespace("App\Controllers");

$router->group('/');
$router->get('/', 'LoginController:index');
$router->post('/', 'LoginController:login');

$router->group('/user');
$router->get('/', 'UserController:index');
$router->post('/loggout', 'UserController:loggout');

$router->group('/error');
$router->get('/', function() {
    echo 'error';
});

$router->dispatch();