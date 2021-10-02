<?php

abstract class Middleware
{
    private ?Middleware $next = null;

    public function linkWith(Middleware $middleware): Middleware
    {
        $this->next = $middleware;
        return $this;
    }

    public function check(string $username, string $password): bool
    {
        if (!$this->next) {
            echo "Tüm kontroller yapıldı!" . PHP_EOL;
            return true;
        }

        echo get_class($this->next)." çağrılıyor..." . PHP_EOL;
        return $this->next->check($username, $password);
    }
}

class IsUserExists extends Middleware
{
    private array $users;

    public function __construct(array $users)
    {
        $this->users = $users;
    }

    public function check(string $username, string $password): bool
    {
        if(!array_key_exists($username, $this->users)) {
            echo "{$username} kullanıcı listesinde bulunamadı" . PHP_EOL;
            return false;
        }

        if ($this->users[$username]["password"] !== $password) {
            echo "{$username} parolası hatalı!" . PHP_EOL;
            return false;
        }

        return parent::check($username, $password);
    }
}

class IsAdmin extends Middleware
{
    private array $users;

    public function __construct(array $users)
    {
        $this->users = $users;
    }

    public function check(string $username, string $password): bool
    {
        if($this->users[$username]['type'] != "admin") {
            echo "{$username} kullanıcı tipi admin değil!" . PHP_EOL;
            return false;
        }

        return parent::check($username, $password);
    }
}

class App
{
    public array $users = [
        "eray" => [
            "type" => "admin",
            "password" => "cokguvenli123",
        ],
        "normal" => [
            "type" => "user",
            "password" => "123456",
        ]
    ];

    private $middleware;

    public function setMiddleware(Middleware $middleware): void
    {
        $this->middleware = $middleware;
    }

    public function login(string $username, string $password): bool
    {
        return $this->middleware->check($username, $password);
    }
}

$app = new App();
$middleware = (new IsUserExists($app->users))->linkWith(new IsAdmin($app->users));
$app->setMiddleware($middleware);
var_dump($app->login("eray", "cokguvenli123"));