<?php

/*
$urunler = [
  [
    "isim" => "X Ürünü",
    "fiyat" => 100,
    "secenekler" => ["Kırmızı", "Mavi"],
  ],
  [
    "isim" => "Y Ürünü",
    "fiyat" => 3.21,
    "secenekler" => null,
  ]
];

file_put_contents("phpileolusturuldu.json", json_encode($urunler, JSON_PRETTY_PRINT));
 */
$json = file_get_contents("phpileolusturuldu.json");
$urunler = json_decode("{\"deneme\": 123}", true);
//var_dump($urunler[0]["isim"]);

echo json_last_error_msg();
