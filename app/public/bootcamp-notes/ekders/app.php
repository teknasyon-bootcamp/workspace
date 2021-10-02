<?php

/*
spl_autoload_register(function (string $class): void {
  echo "Sınıf yüklemesi yapılacak...";

  var_dump($class);
  require "class.php";
});
 */

/*
class OtomatikYukleyici
{
  public function baslat()
  {
    spl_autoload_register([$this, 'yukle']);
  }

  public function yukle(string $sinif)
  {
    echo "Sınıf yüklemesi yapılacak...";
    var_dump($sinif);    
    if ($sinif == "Eray\Database\ORM") {
      require "orm.php";
    }
  }
}

 
require "orm.php";
(new OtomatikYukleyici)->baslat();

new Eray\Database\ORM("asdasd");
*/
/*
spl_autoload_register(function (string $class): void {
  echo "Sınıf yüklemesi yapılıyor: {$class}".PHP_EOL;
  $class = strtolower($class);
  require "siniflar/{$class}.php";
});




$islem = "topla";
if ($islem == "topla") {
  $op = new Topla();
  $op->topla(1, 2);
} else {
  $op = new Cikart();
  $op->cikart(1, 2);
}
*/

spl_autoload_register(function ($class) {

    // project-specific namespace prefix
    $prefix = 'ErayAydin\\App\\';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/uygulama/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});

new ErayAydin\App\Database\ORM();

