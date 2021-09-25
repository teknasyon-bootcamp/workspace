<?php

class MySQLDBHandler implements DBHandler
{
    public function all(string $table): array
    {
        return ["MySQL", "üzerinden gelen", "tüm liste"];
    }
}
