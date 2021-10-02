<?php

/**
 * Veritabanı Yönetim Sistemi Türleri
 * - hiyerarşik
 * - ağ
 * - ilişkisel
 * - nesne yönelimli OO
 * - graf
 * - ER modeli
 * - döküman
 *
 * - RDBMS (ilişkisel veritabanı yönetim sistemi) (MySQL, DB2, MSSQL)
 * - OODBMS (nesne yönelimli veritabanı yönetim sistemi) (ObjectStore)
 * - ORDBMS (ilişkisel-nesne yönelimli veritabanı yönetim sistemi) (PostgreSQL, Oracle, SQLServer)
 *
 * - veriyi depolama, veriyi almak ve veriyi güncellemek
 * - metadata
 * - transaction
 * - concurrency / eş zamanlılık
 * - veri kurtarma
 * - authorization / erişim denetimi
 * - uzaktan yönetim / remote
 * - standartlar
 * - import / export
 * - monitoring
 * - analysis
 *
 * - API
 * - Database Language
 *
 * Database (Storage) Engine
 * - InnoDB
 * - MyISAM
 * - TokuDB
 * - Falcon
 *
 * Database Language
 * - DCL (Data Control Language): Yetkilendirme ile ilgili dil sözcüklerini belirtir (Örn `GRANT`, `REVOKE`)
 * - DDL (Data Definition Language): Verinin yapısını belirler (Örn `CREATE`, `ALTER`, `TRUNCATE`)
 * - DML (Data Manipulation Language): Veri üzerinde işlemler yapmamızı sağlar (Örn: `INSERT`, `UPDATE`, `DELETE`)
 * - DQL (Data Query Language): Veri üzerinde sorgulama yapmamızı sağlar. (Örn: `SELECT`)
 * - TCL (Transaction Control Language): İşlemlerin bütünlüğünü sağlayan yapılar, transaction yapıları. (Örn: `TRANSACTION`, `COMMIT`)
 *
 * Driver
 * - mysqlnd (PHP 5.3 built-in)
 * - libmysqlclient
 *
 * API
 * - MySQL API (MySQL 4-, PHP 4 ve 5), server-side/client-side prepare yok (hazırlanmış işlem yok),
 * ```php
 * mysql_*
 * ```
 * - Mysqli (improved) API (MySQL 4+, PHP 5 ve üstü), server-side prepare var lakin client-side prepare yok. Hem prosedürel hem de OOP
 * ```php
 * mysqli_*();
 * new mysqli
 * ``` 
 * - PDO (PHP 5.1+) abstract soyut (birden çok DBMS), prosedürel yok sadece OOP,
 * ```php
 * new PDO
 * ```
 * - xDevApi (harici extension, MySQL 8+), prosedürel var
 * ```php
 * mysql_xdevapi\*
 * ```
 *
 */

class User {
  public int $id;
  public string $name;
  public string $surname;

  public function __construct(protected bool $isActive)
  {
    
  }
}

class ActiveUser extends User {
  public function __construct(protected int $totalPost, protected float $score)
  {
    parent::__construct(true);
    $this->name = "Ezdim!";
  }
}

try {
  $pdo = new PDO("mysql:host=mariadb;dbname=temp_week4;charset=utf8", "root", "root");
} catch (PDOException $e) {
  echo "Veritabani hatası: {$e->getMessage()}";
  exit(1);
}

//$query = $pdo->query("SELECT * FROM users"); 
// $query->setFetchMode(PDO::FETCH_CLASS, ActiveUser::class, [3, 1.1]);

/*
while ($single = $query->fetchObject(ActiveUser::class, [3, 1.1])) {
  var_dump($single); // Eray Aydın
}
 */

//$query->setFetchMode(PDO::FETCH_CLASS, ActiveUser::class, [2, 5]);
//var_dump($query->fetch(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE));
/*
$users = $query->fetchAll(PDO::FETCH_OBJ);
echo "<ul>";
foreach ($users as $user)
  echo "<li>{$user->name}</li>";
echo "</ul>";
 */

/*
$queryStr = "INSERT INTO users VALUES(7, \"Hasan\", \"Basri\")";
//$pdo->query($queryStr);
$pdo->exec($queryStr);

$deleteStr = "DELETE FROM users WHERE name=\"Hasan\"";
$toplamSilinen = $pdo->exec($deleteStr);

echo "Silinen: {$toplamSilinen}";
*/

// unnamed placeholders
//$queryStr = "INSERT INTO users VALUES(?, ?, ?)";
//$insert = $pdo->prepare($queryStr);

/*
$queryStrNamed = "INSERT INTO users(name, surname) VALUES(:name, :eraySurname)";
$insertNamed = $pdo->prepare($queryStrNamed);

$insertNamed->execute([
  ":name" => "Hasan Kürşad",
  ":eraySurname" => "Korkmaz",
]);

/*
$select = $pdo->query("SELECT * FROM users");
//$select->execute();

var_dump($select->rowCount());

/*
$selectQuery = "SELECT * FROM users";
$select = $pdo->prepare($selectQuery);
$select->execute();

var_dump($select->fetchColumn()); // 1
var_dump($select->fetchColumn()); // 2

/*
$selectQuery = "SELECT * FROM users";
$select = $pdo->prepare($selectQuery);
$select->execute();

$select->bindColumn("id", $id);
$select->bindColumn(2, $name);
$select->bindColumn("surname", $surname);

while ($select->fetch(PDO::FETCH_BOUND)) {
  echo "ID: {$id}<br>";
  echo "Name: {$name}<br>";
  echo "Surname: {$surname}";
  echo "<br>";
}
/*
$name = "Betül";
$surname = "Şahan";
$id = 11;

$insertNamed->bindParam(":name", $name);
$insertNamed->bindParam(":eraySurname", $surname); 
$insertNamed->bindParam(":id", $id);

$name = "Serhat";
$surname = "Yaren";
$id = 12;

$insertNamed->execute();

/*
$insertNamed->execute([
  ":name" => "Cihad",
  ":eraySurname" => "Alkış",
  ":id" => 10,
]);
*/


/*
$insert->execute([7, "Hasan", "Basri"]);
$insert->execute([8, "Efe", "Büyük"]);
$insert->execute([9, "Elif", "N"]);
*/



