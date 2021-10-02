<?php

namespace App\Controller;

use App\Model\User;

class UserController extends BaseController
{
    public function index(): void
    {
        $users = User::all();
        echo view("user/index", ["userList" => $users]);
    }

    public function show(string $name): void
    {
        $user = User::find("firstname", $name);
        echo view("user/show", ["user" => $user[0]]);
    }

    public function full(string $name, string $surname, string $age): void
    {
        echo "{$name} {$surname} {$age}";
    }
}
