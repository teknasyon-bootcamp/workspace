<?php

class AClass {
  public static function getSelf() {
    return new self();
  }

}

class BClass extends AClass {
  public static function getStatic() {
    return new static();
  }
  public static function getSelf() {
    return new self();
  }
}

class CClass extends BClass {

}

echo get_class(BClass::getStatic());
echo get_class(BClass::getSelf());

/*
echo get_class(CClass::getSelf()) . PHP_EOL; //AClass
echo get_class(BClass::getStatic()) . PHP_EOL; //BClass

echo get_class(AClass::getSelf()) . PHP_EOL; // AClass
echo get_class(AClass::getStatic()) . PHP_EOL; // AClass
 */
