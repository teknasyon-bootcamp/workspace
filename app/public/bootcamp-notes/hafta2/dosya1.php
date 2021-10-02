<?php

$dosya = "1. dosya";
echo "[dosya1.php] Şuanki dosya: " . $dosya . "<br>";
// Dosyayı aradığı yerler:
// - belirtilen path (relative `./` `../` / absolute `C:\\` `/`)
// - `include_path`
// - script'in dizinine
// - current working directory
include("deneme.php"); // bulamazsa, uyarı verir
$dosya .= "blabla";
include_once("deneme.php"); // daha önce dahil edilmemişse, dahil et (include)
require("deneme.php"); // bulamazsa, hata verir
require_once("deneme.php"); // daha önce dahil edilmemişse, dahil et (require)
echo "[dosya1.php] Şuanki dosya: " . $dosya . "<br>";
