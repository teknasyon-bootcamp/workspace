<?php

class Entity { }

class Character extends Entity
{
  public static int $totalAliveCharacter = 0;
  private bool $isDead = false;

  public function __construct(
    protected string $name,
    protected string $specy,
    protected string $gender
  ) { }

  public static function addAliveCharacter() {
    self::$totalAliveCharacter++;
  }

  public static function createCharacter(string $name, string $gender, string $specy = "human", bool $isAntenna = false): static {
    if ($isAntenna) {
      return new AntennaCharacter($name, $specy, $gender, true);
    }
    return new self($name, $specy, $gender);
  }

  public function isAlive() {
    return !$this->isDead;
  }

  public function talk(string $message): void {
    echo "[".$this->name."]: " . $message . PHP_EOL;
  }
}


class AntennaCharacter extends Character
{
  public function __construct(
    string $name,
    string $specy,
    string $gender,
    protected bool $isAntennaWorks 
  ) {
    parent::__construct($name, $specy, $gender);
  }

  public function useAntenna(Character $other, string $message) {
    echo "[".$this->name."] -> [".$other->name."] : ".$message.PHP_EOL;
  }

  public function talk(string $message): void {
    parent::talk($message);
    echo "Bızz".PHP_EOL;
  }
}

var_dump(AntennaCharacter::createCharacter("deneme", "male", "alien", false));
/*
$deneme = Character::createCharacter("deneme", "female", "alien", true);
var_dump($deneme);
 */
// $rick = new Character("Rick Sanchez", specy: "human", gender: "male");
// $rick->talk("Selam!");


// $rickAntenna = new AntennaCharacter("Antenna Rick", "human", "male", false);
// $mortyAntenna = new AntennaCharacter("Antenna Morty", "human", "male", true);
//var_dump($mortyAntenna);
// $rickAntenna->useAntenna($mortyAntenna, "Selam morty!");
//$rickAntenna->talk(3);

/*
Character::$totalAliveCharacter = 2;
Character::addAliveCharacter();
echo Character::$totalAliveCharacter;
*/
