<?php

namespace App\Logger;

interface Loggable
{
    public function log(string $message, int $level): void;
}
