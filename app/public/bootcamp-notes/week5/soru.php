<?php

trait BaseClass {
  public static $i = 0;

  public function arttir() {
    self::$i += 1;
    echo self::$i . PHP_EOL;
  }
}

class AClass {
  use BaseClass;
}

class BClass {
  use BaseClass;
}

/*
class BaseClass {

  public static $i = 0;

  public function arttir() {
    self::$i += 1;
    echo self::$i . PHP_EOL;
  }
}

class AClass extends BaseClass {

}

class BClass extends BaseClass {

}
*/

$a = new AClass();
$b = new BClass();
$a->arttir();
$b->arttir();
