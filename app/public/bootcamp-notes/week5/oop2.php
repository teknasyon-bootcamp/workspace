<?php

abstract class Hayvan
{
  protected string $isim;

  public function __construct(string $isim)
  {
    $this->isim = $isim;
  }

  abstract public function konus(): void;
}

class Kopek extends Hayvan
{
  public function konus(): void
  {
    echo $this->isim . " hav hav!";
  }
}

class Kedi extends Hayvan
{
  public function konus(): void
  {
    echo $this->isim . " miyav!";
  }
}

interface HayvanBarinagi
{
  public function sahiplen(string $isim): Hayvan;
}

class KediBarinagi implements HayvanBarinagi
{
  public function sahiplen(string $isim): Kedi
  {
    return new Kedi($isim);
  }
}

class KopekBarinagi implements HayvanBarinagi
{
  public function sahiplen(string $isim): Kopek
  {
    return new Kopek($isim);
  }
}

$kediBarinagi = new KediBarinagi();
$kopekBarinagi = new KopekBarinagi();

$salem = $kediBarinagi->sahiplen("Salem");
$kopek = $kopekBarinagi->sahiplen("Karabaş");

$salem->konus();
$kopek->konus();


