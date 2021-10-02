<?php

namespace App\DB;

use App\DB\Engine\Driver;
use App\Model\IModel;

class Database {
    protected Driver $driver;

    public function setDriver(Driver $driver)
    {
        $this->driver = $driver;
    }

    public function all(string $table): array
    {
        return $this->driver->all($table);
    }

    public function find(string $table, mixed $id): array
    {
        return $this->driver->find($table, $id);
    }

    public function create(string $table, array $values): void
    {
        $this->driver->create($table, $values);
    }
}