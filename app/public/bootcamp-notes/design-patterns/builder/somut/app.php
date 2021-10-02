<?php

interface SQLQueryBuilder
{
    public function select(string $table, array $fields): SQLQueryBuilder;
    public function limit(int $start, int $end): SQLQueryBuilder;
    public function getQuery(): string;
}

class MySQLQueryBuilder implements SQLQueryBuilder
{
    protected $query;

    public function select(string $table, array $fields): SQLQueryBuilder
    {
        echo "MySQL için select işlemi";
        return $this;
    }

    public function limit(int $start, int $end): SQLQueryBuilder
    {
        echo "MySQL için limit işlemi";
        return $this;
    }

    public function getQuery(): string
    {
        return "MySQL oluşturulan query";
    }
}

class PostgreQueryBuilder implements SQLQueryBuilder
{
    protected $query;

    public function select(string $table, array $fields): SQLQueryBuilder
    {
        echo "Postgre için select işlemi";
        return $this;
    }

    public function limit(int $start, int $end): SQLQueryBuilder
    {
        echo "Postgre için limit işlemi";
        return $this;
    }

    public function getQuery(): string
    {
        return "PostgreSQL oluşturulan query";
    }
}

function createQuery(SQLQueryBuilder $builder)
{
    return $builder->select("asdas", [])->limit(1, 5)->getQuery();
}

echo createQuery(new MySQLQueryBuilder());
echo createQuery(new PostgreQueryBuilder());