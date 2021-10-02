<?php

/*
function benimOzelHataYontemim($errno, $errmsg, $file, $line) {
  echo "Kritik bir hata oluştu!" . PHP_EOL;
  echo "Mesaj: {$errmsg}" . PHP_EOL;
  echo "Dosya: {$file}" . PHP_EOL;
}
set_error_handler("benimOzelHataYontemim");
trigger_error("Kodu güzel yaz...");
*/

/*
$benimOzel = function ($exception) {
  echo "Bir exception aldım!" . PHP_EOL;
  var_dump($exception);
};
set_exception_handler($benimOzel);
throw new Exception("Kodu çok kötü yazdın...");
*/

function bolmeIslemi($x, $y) {
  /*
  try {
    return $x/$y;
  } catch (Exception) {
    echo "Bir hata oluştu!";
    return 0;
  } finally {
    echo "İşlem Bitti!";
  }
  */

  try {
    return $x/$y;
  } catch (Throwable) {
    echo "Bir hata oluştu!";
    return 0;
  } finally {
    echo "İşlem Bitti!";
  }
}
var_dump(bolmeIslemi(3, 0));
/*
try {
  // yapılmaya çalışacak işlemler
} catch (Throwable $e) {
  // CustomException türünde bir hata fırlatıldı.
  // Bununla ilgili işlemler yap...
  echo "Özel bir hata oluştu!";
} finally {
  echo "İşlem Bitti";
}
*/
