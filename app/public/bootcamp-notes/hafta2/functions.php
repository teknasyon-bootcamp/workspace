<?php

// Fonksiyonlar

//function isim($x, $y = 2, $z = "", ...$argumanlar) use ($pi)
//{
//  // fonksiyon çağrıldığında çalıştırılacak olan kodlar
//}

//function varsayilanDeger()
//{
//  return 1;
//}
//
//function topla ($x, $y=1) {
//  echo "Toplam: " . ($x + $y) . "<br>";
//}
//$sayi = 5;
//$sayi2 = 3;
//topla($sayi, $sayi2);
//topla($sayi);
//topla(1, 2);
//topla(10, 100);

//function metinGoster ($icerik, $baslik = "Başlık", $renk = "red") {
//  echo "<div style='background: ".$renk."'>[".$baslik."] " . $icerik . "</div>";
//} 
//
//// PHP 8
//metinGoster("Merhaba!");
//metinGoster("Merhaba 2!", "Özel Başlık");
//metinGoster("Merhaba 3!", "Başlık", "yellow");
//metinGoster("Merhaba", renk: "green", baslik: "Yeni Özel Başlık");
//metinGoster("Merhaba", renk: 'green', renk: 'yellow');
//metinGoster("Merhaba", null, "green");

//function topla(...$sayilar) {
//  $toplam = 0;
//  foreach ($sayilar as $sayi) {
//    $toplam += $sayi;
//  }
//
//  echo "Toplam: " . $toplam . "<br>";
//}
//
//topla(1);
//topla(1, 2);
//topla(1,2,3);
//topla(1,2,3,4);

(function ($sayi1, $sayi2) {
  echo "Toplam:". $sayi1 + $sayi2;
})(5, 2);






