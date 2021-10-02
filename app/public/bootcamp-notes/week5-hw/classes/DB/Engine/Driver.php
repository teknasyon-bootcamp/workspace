<?php

namespace App\DB\Engine;

interface Driver
{
    public function all(string $table): array;
    public function find(string $table, mixed $id): array;
    public function create(string $table, array $values): void;
    public function update(string $table, mixed $id, array $values): void;
    public function delete(string $table, mixed $id): void;
}
