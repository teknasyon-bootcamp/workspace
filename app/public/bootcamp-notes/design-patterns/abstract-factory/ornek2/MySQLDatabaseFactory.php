<?php

class MySQLDatabaseFactory implements DatabaseFactory
{
    public function createDBHandler(): DBHandler
    {
        return new MySQLDBHandler();
    }
}