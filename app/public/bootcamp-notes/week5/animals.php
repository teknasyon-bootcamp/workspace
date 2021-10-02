<?php

abstract class Hayvan {

  protected string $isim;

  public function __construct(string $isim)
  {
    $this->isim = $isim;
  }

  public function getIsim(): string {
    return $this->isim;
  }

  abstract public function konus(): void;
}

class Kopek extends Hayvan implements Temizlenebilen {
  public function konus(): void {
    echo $this->isim . " hav hav!";
  }

  public function temizlen(): void {
    echo $this->isim . " kendini yalıyor...";
  }
}

class Kedi extends Hayvan implements Temizlenebilen, Tirmalama {
  public function konus(): void {
    echo $this->isim . " miyav miyav!";
  }

  public function temizlen(): void {
    echo $this->isim . " kendini yalıyor...";
  }

  public function tirmala(string $kimi): void {
    echo $this->isim . " {$kimi}'ı tırmalıyor...";
  }
}


function konustur(Hayvan $hayvan) {
  echo $hayvan->getIsim() . " konuşacak..." . PHP_EOL;
  $hayvan->isim;
  $hayvan->konus();
}

//konustur(new Kedi("Salem"));
//konustur(new Kopek("Tarkan'in Kurdu"));

interface Tirmalama {
  public function tirmala(string $kimi): void;
}

interface Temizlenebilen {
  public function temizlen(): void;
}

interface ASDASDAS {
  public static function zczxc(): void;
}

function tirmalamaSaldirisi(Tirmalama $saldiran) {
  $saldiran->tirmala("Eray");
}

function temizlen(Temizlenebilen $hayvan) {
  $hayvan->temizlen();
}

$salem = new Kedi("Salem");
$kopek = new Kopek("Tarkan'ın Kurdu");

tirmalamaSaldirisi($salem);
echo PHP_EOL;
temizlen($salem);
echo PHP_EOL;
temizlen($kopek);
