<?php

require "DatabaseFactory.php";
require "DBHandler.php";
require "MongoDBDatabaseFactory.php";
require "MongoDBHandler.php";
require "MySQLDatabaseFactory.php";
require "MySQLDBHandler.php";

class User
{
    public function getAll(DatabaseFactory $factory): array
    {
        return $factory->createDBHandler()->all("users");
    }
}

$user = new User;
var_dump($user->getAll(new MongoDBDatabaseFactory()));