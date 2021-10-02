<?php

interface Logger {
  public const DEBUG = 1;
  public const WARN = 2;
  public const ERROR = 3;

  public function log(string $message, int $level): void;
}

class FileLogger implements Logger {
  public function log(string $message, int $level): void
  {
    file_put_contents("log.log", "[{$level}] {$message}");
  }
}

class ConsoleLogger implements Logger {
  public function log(string $message, int $level): void
  {
    echo "[{$level}] {$message}";
  }
}

trait Loggable {
  
  protected $logger;

  public function setLogger(Logger $logger): void {
    $this->logger = $logger;
  }

  public function log(string $message, int $level): void {
    $this->logger->log($message, $level);
  }

}

class FileSystem {
  use Loggable;
}

abstract class Model {
  use Loggable; 
}

class User extends Model {

} 

class Customer extends Model {

}

$fileLogger = new FileLogger();
$consoleLogger = new ConsoleLogger();

$fs = new FileSystem();
$fs->setLogger($consoleLogger);
$fs->log("asdasdasd", Logger::WARN);

$user = new User;
$customer = new Customer();

$user->setLogger($fileLogger);
$customer->setLogger($consoleLogger);

$user->log("Kullanıcı bir hata yaptı!", Logger::DEBUG);
$customer->log("Müşteri ölümcül bir hata yaptı!", Logger::ERROR);

