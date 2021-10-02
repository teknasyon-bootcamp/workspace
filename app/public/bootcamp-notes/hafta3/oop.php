<?php

function yazdir(string $mesaj, ?string $baslik): void {
  echo "[".$baslik."]: ".$mesaj;
}

class Test
{
  public const TEST = "123";
  protected const TEST2 = 1;
  private const TEST3 = 1.1;

  public int $x = 1;
  protected float $y = 3.14;
  private bool $z = false;

  public function yazdir() {
    echo "Yazdır metodu tetiklendi!";
  }

  protected function testMethod() {

  }

  private function testMethod2() {

  }
}

class Person
{
  public string $name;
  public string $surname;
  public ?int $age = null;
  private float $speed = 0;

  public function speedUp(int $count = 1): void {
    echo "Hız arttırılıyor...".PHP_EOL;
    $this->speed += $count;
  }

  public function speedDown(int $count = 1): void {
    echo "Hız azaltılıyor...".PHP_EOL;
    $this->speed -= $count;
  }

  public function displayInfo() {
    echo "Kişinin bilgileri".PHP_EOL;

    echo "Kişinin adı: " . $this->name . PHP_EOL;
    echo "Kişinin soyismi: " . $this->surname . PHP_EOL;
    echo "Kişinin Yaşı: " . $this->age . PHP_EOL;
    echo "Kişinin Hızı: " . $this->speed . PHP_EOL;
  }

  public function kisininHiziniUcur(Person $person) {
    $person->speed = 1000;
  }
}

$eray = new Person();
$eray->name = "Eray";
$eray->surname = "Aydın";
$eray->age = 26;
$eray->speedUp();
$eray->speedUp(3);
$eray->speedDown(2);
$eray->displayInfo();

$mucahit = new Person();
$mucahit->name = "Mücahit";
$mucahit->surname = "Yılmaz";
$mucahit->age = 100; // O.o

$eray->kisininHiziniUcur($mucahit);

$mucahit->displayInfo();
