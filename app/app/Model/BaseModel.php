<?php

namespace App\Model;

use App\Database;

abstract class BaseModel
{
    protected abstract static function getTable(): string;

    public static function all()
    {
        return Database::getInstance()->select(static::getTable());
    }

    public static function find($field, $value)
    {
        return Database::getInstance()->find(static::getTable(), $field, $value);
    }
}
