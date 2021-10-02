<?php

// While
//
// while (ifade) {
//      işlemler
// }

//$sayi = 1;
// while ($sayi < 3) {
//   echo $sayi . PHP_EOL;
//   $sayi++;
// }
//
//echo "son sayı:".$sayi . PHP_EOL;

//while ($sayi < 3):
//  echo $sayi . PHP_EOL;
//  $sayi++;
//endwhile;
//
//while ($sayi++ < 3)
//  echo $sayi . PHP_EOL;
//
//while ($sayi++ < 10);

//do {
//  // işlemler
//} while (koşul);
//
//do {
//  // tahmin değerini al
//} while (tahmin_degeri_yanlis_mi);

//$ciftRandomSayilar = [];
//// rand(minimum, maximum); random sayı verecek
//// $ciftRandomSayilar[] = değer;
//
//$min = 1;
//$max = 100;
//$sayi = 0;
//do {
//  $randomSayi = rand(1, 100);
//  if ($randomSayi%2==0)
//  {
//    $ciftRandomSayilar[] = $randomSayi;
//    $sayi++;
//  }
//} while($sayi < 11);
//
//var_dump($ciftRandomSayilar);

//for (baslangic_ifadeleri ; kontrol_ifadesi ; arttirma/azaltma, iterasyon_sonrasi) {
//  // işlemleri...
//  // ...
//  // ...
//  // ...
//}

//for ($sayi=1 ; $sayi <= 3 ; $sayi++) {
//  echo $sayi;
//}
//
//for ($sayi=1 ; $sayi <= 3 ; $sayi++):
//  echo $sayi;
//endfor;

//for ($sayi=1; $sayi >= 0; print $sayi.PHP_EOL, $sayi++);
// echo "Sayma işlemi bitti!";

//for ( ;; ) {
//  echo PHP_EOL;
//}

$fakulteler = [
  "Fen Fakültesi" => [
    "Matematik", "Biyoloji", "İstatistik",
  ],
  "İletişim Fakültesi" => [
    "Reklamcılık", "Halkla İlişkiler",
  ],
  "Mühendislik Fakültesi" => [
    "İnşaat", "Kimya",
  ],
];

//foreach (ifade1 as deger) {
//  // işlemler
//}
//
//foreach (ifade1 as anahtar => deger) {
//  // işlemler
//}
//
//foreach (ifade1 as deger):
//  // işlemler
//endforeach;

// Fen Fakültesi => Matematik Biyoloji İstatistik
//foreach ($fakulteler as $fakulte => $bolumler) {
//  echo $fakulte . " => ";
//  foreach ($bolumler as $bolum) {
//    echo $bolum . " ";
//  }
//  echo PHP_EOL;
//}

// Switch

//switch (ifade1)
//{
//  case deger1:
//    ...
//    break;
//  case deger2:
//    ...
//    break;
//  case deger3:
//    ...
//    break;
//  case deger4:
//  case deger5:
//  case deger6:
//    ...
//    break;
//}
//$gunNumarasi = 10;
//switch ($gunNumarasi) {
//  case 1:
//    echo "Pazartesi";
//    break;
//  case 2:
//    echo "Salı";
//    break;
//  case 3:
//    echo "Çarşamba";
//    break;
//  case 4:
//    echo "Perşembe";
//    break;
//  case 5:
//    echo "Cuma";
//    break;
//  case 6:
//    echo "Cumartesi";
//    break;
//  case 7:
//  case 8:
//  case 9:
//    echo "Pazar";
//    break;
//}
//
//$gunNumarasi = 6;
//$day = match ($gunNumarasi) {
//  1,2,3,4,5 => "Hafta içi",
//  6,7 => "Haftasonu",
//  default => false,
//};
//var_dump($day);

//$ifadeNeymiş = match (ifade) {
//  koşul1, koşul2 => dönüş_degeri,
//  koşul3 => dönüş_degeri,
////  default => dönüş_degeri,
//};

// break

//for ($i=0; $i<100; $i++) {
//  echo $i;
//  if ($i == 10)
//  {
//    break 1;
//  }
//}
//
//
//for ($x=0; $x<20; $x++) {
//  for ($y=0; $y<20; $y++) {
//    for ($z=0; $z<20; $z++) {
//      if ($z == 10) {
//        break 2;
//      }
//    }
//  }
//  // buradan devam et!
//}

// continue

//for ($i=0; $i<5; $i++) {
//  if ($i == 3) {
//    continue 2;
//  }
//  echo $i.PHP_EOL;
//}

//for ($x=0; $x<3; $x++) {
//  echo "x=".$x.PHP_EOL;
//  for ($y=0; $y<3; $y++) {
//    echo "y=".$y.PHP_EOL;
//    for ($z=0; $z<3; $z++) {
//      if ($z == 1) {
//        continue 3;
//      }
//      echo "z=".$z.PHP_EOL;
//    }
//  }
//}
