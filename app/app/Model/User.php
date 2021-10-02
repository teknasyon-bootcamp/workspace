<?php

namespace App\Model;

class User extends BaseModel
{
    protected static function getTable(): string
    {
        return "users";
    }
}