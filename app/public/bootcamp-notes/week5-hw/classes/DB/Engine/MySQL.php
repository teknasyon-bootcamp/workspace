<?php

namespace App\DB\Engine;

use App\DB\Database;

class MySQL implements Driver {
    protected \PDO $db;

    public function __construct(string $host, string $user = null, string $pass = null, string $dbname = "default")
    {
        $this->db = new \PDO("mysql:host={$host};dbname={$dbname}", $user, $pass);
    }

    public function all(string $table): array
    {
        // TODO: Implement all() method.
    }

    public function find(string $table, mixed $id): array
    {
        // TODO: Implement find() method.
    }

    public function create(string $table, array $values): void
    {
        // TODO: Implement create() method.
    }

    public function update(string $table, mixed $id, array $values): void
    {
        // TODO: Implement update() method.
    }

    public function delete(string $table, mixed $id): void
    {
        // TODO: Implement delete() method.
    }
}
