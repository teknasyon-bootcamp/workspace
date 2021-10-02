<?php

namespace App\Logger;

use App\Logger\Driver\Driver;

class Logger implements Loggable
{
    protected Driver $driver;

    public function __construct(Driver $driver)
    {
        $this->setDriver($driver);
    }

    protected function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }

    public function log(string $message, int $level): void
    {
        // TODO: Implement log() method.
    }
}
