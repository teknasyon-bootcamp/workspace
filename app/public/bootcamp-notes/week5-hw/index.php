<?php

/*
require __DIR__ . "/classes/DB/Engine/MongoDB.php";
require __DIR__ . "/classes/DB/Engine/MySQL.php";
require __DIR__ . "/classes/DB/Database.php";
require __DIR__ . "/classes/DB/Query.php";

require __DIR__ . "/classes/Logger/Driver/Driver.php";
require __DIR__ . "/classes/Logger/Driver/Database.php";
require __DIR__ . "/classes/Logger/Driver/File.php";
require __DIR__ . "/classes/Logger/Loggable.php";
require __DIR__ . "/classes/Logger/Logger.php";

require __DIR__ . "/classes/Model/Model.php";
require __DIR__ . "/classes/Model/User.php";
require __DIR__ . "/classes/Model/Post.php";
*/

use App\DB\Engine\MySQL;

require __DIR__ . "/classes/DB/Engine/Driver.php";
require __DIR__ . "/classes/DB/Database.php";
require __DIR__ . "/classes/DB/Engine/MySQL.php";
require __DIR__ . "/classes/DB/Engine/MongoDB.php";

$database = new \App\DB\Database();
$database->setDriver(new MySQL("mariadb", "root", "root", "week5"));

$database->create("users", [
    "name" => "Eray",
    "surname" => "Aydın",
]);
