<?php

class MongoDBDatabaseFactory implements DatabaseFactory
{
    public function createDBHandler(): DBHandler
    {
        return new MongoDBHandler();
    }
}
