<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// GET /user -> UserController@index
// POST /user -> UserController@insert
// GET /user/* -> UserController@show

$routes = new RouteCollection();
$routes->add(
    'user',
    new Route('/user', ['controller' => \App\Controller\UserController::class, 'method' => 'index'])
);
$routes->add(
    'user.show',
    new Route('/user/{name}', ['controller' => \App\Controller\UserController::class, 'method' => 'show'], ['name' => '[A-Za-z0-9]+'])
);

return $routes;