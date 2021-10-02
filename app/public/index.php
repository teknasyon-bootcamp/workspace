<?php

use App\Router;

require __DIR__ . "/../vendor/autoload.php";

\App\Database::getInstance()->initialize("mariadb", "root", "root", "bootcamp_mvc");

$routes = require __DIR__ . "/../app/routes.php";

(new Router($routes))();
