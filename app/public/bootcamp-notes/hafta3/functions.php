<?php

function ciftSayilar() {
  return [2, 4, 6, 8];
}

function yazdir($metin) {
  echo $metin;
}

/*
[$ilk, $ikinci, $ucuncu, $dorduncu] = ciftSayilar();
// list($ilk, $ikinci, $ucuncu, $dorduncu) = ciftSayilar();
 */

/*
(function () {

})();

$yazdir = function ($mesaj) {
  return "Mesaj: " . $mesaj;
};

echo $yazdir("Bootcamp!");
 */

// fn (argumanlar) => ifade

/*
$baslik = "Mesaj";
$yazdir = fn ($mesaj) => $baslik.":".$mesaj;
echo $yazdir("Bootcamp");
*/

/*
$pi = 3.14;
$karesiniAlVePiTopla = fn($x) => $x*$x + $pi;
echo $karesiniAlVePiTopla(5);
*/
/*
$z = 3;
$islemler = fn($x) => fn($y) => $x*$y - $z;

// x = 5
// y = 2

// echo $islemler(5, 2);
$xBes = $islemler(5);
$xBes = function ($y) {
  return 5*$y - 3;
};

echo $xBes(2);
 */

/*
$z = 5;
$xBes = function ($y) {
  return 5*$y - $z;
};

echo $xBes(2);
*/

var_dump($GLOBALS);
