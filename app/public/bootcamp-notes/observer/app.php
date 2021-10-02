<?php

class UserRepository implements SplSubject
{
    private $observers = [
        '*' => [Logger::class],
        'create' => [SendEmail::class],
        /*
        '*' => [DatabaseRefresh, CacheRefresh],
        'create' => [SendEmail, SendSMS, SendSlackNotification],
        'update' => [ConfirmEmail]
        */
    ];

    public function __construct(Logger $logger, SendEmail $sendEmail)
    {
        $this->observers["*"] = [];
    }

    public function attach(SplObserver $observer, string $event = "*")
    {
        echo "{$event} etkinliği için " . get_class($observer) . " eklendi!" . PHP_EOL;
        $this->observers[$event][] = $observer;
    }

    public function detach(SplObserver $observer, string $event = "*"): void
    {
        foreach ($this->getEventObservers() as $key => $item) {
            if ($item === $observer) {
                unset($this->observers[$event][$key]);
            }
        }
    }

    public function notify(string $event = "*", array $data = [])
    {
        echo "UserRepository içerisinde bir event ({$event}) tetikleniyor." . PHP_EOL;
        foreach ($this->getEventObservers($event) as $observer) {
            echo "UserRepository içerisinde " . get_class($observer) . " sınıfına bilgi veriliyor." . PHP_EOL;
            $observer->update($this, $data);
        }
    }

    protected function getEventObservers(string $event = "*"): array
    {
        $all = $this->observers["*"];
        $group = [];
        if (isset($this->observers[$event])) {
            $group = $this->observers[$event];
        }

        return array_merge($all, $group);
    }

    public function create(array $data): void
    {
        echo "UserRepository içerisinde ekleme yapılıyor..." . PHP_EOL;

        // Ekleme işlemi...

        $this->notify("create", $data);
    }

    public function update(array $data): void
    {
        echo "UserRepository içerisinde güncelleme yapılıyor..." . PHP_EOL;

        // Ekleme işlemi...

        $this->notify("update", $data);
    }
}

class Logger implements SplObserver
{
    public function update(SplSubject $subject, array $data = []): void
    {
        echo "{$data['user']} kullanıcısı için log oluşturuluyor..." . PHP_EOL;

        // Loglama işlemleri...
    }
}

class SendEmail implements SplObserver
{
    public function update(SplSubject $subject, array $data = []): void
    {
        echo "{$data['email']} e-posta adresine onay e-postası gönderiliyor." . PHP_EOL;

        // E-Posta gönderme işlemleri
    }
}

$repository = new UserRepository();
$repository->attach(new Logger());
$repository->attach(new SendEmail(), "create");

$repository->create([
    "user" => "Eray",
    "email" => "eray.aydin@ozguryazilim.com.tr",
    "password" => "123456",
]);
$repository->update([
    "user" => "Eray",
    "email" => "eray.aydin@ozguryazilim.com.tr",
    "password" => "123456",
    "new_password" => "123123",
]);
