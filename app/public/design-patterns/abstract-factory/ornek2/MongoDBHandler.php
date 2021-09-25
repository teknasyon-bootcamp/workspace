<?php

class MongoDBHandler implements DBHandler
{
    public function all(string $table): array
    {
        return ["MongoDB", "üzerinden gelen", "tüm liste"];
    }
}