<?php

namespace App;

use PDO;

class Database extends Singleton
{
    public PDO $pdo;

    /**
     * @param string $host
     * @param string|null $user
     * @param string|null $password
     * @param string $dbname
     *
     * @throws \PDOException
     */
    public function initialize (
        string $host,
        ?string $user = null,
        ?string $password = null,
        string $dbname = "test"
    ): void
    {
        $this->pdo = new PDO("mysql:host={$host};dbname={$dbname}", $user, $password);
    }

    public function select($table): array
    {
        return $this->pdo->query("SELECT * FROM {$table}")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($table, $field, $value): array
    {
        return $this->pdo->query("SELECT * FROM {$table} WHERE {$field} = '{$value}'")->fetchAll(PDO::FETCH_ASSOC);
    }
}
