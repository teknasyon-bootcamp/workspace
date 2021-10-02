<?php

$dsnMysql = "mysql:host=mariadb;dbname=temp_week44";
$dsnSqlite = "sqlite:/var/temp_week4.sql";

$dsn = $dsnMysql;

try {
  $pdo = new PDO($dsn, "root", "root");
} catch (PDOException) {
  echo "Veritabanı hatası!";
} catch (Exception) {
  echo "Başka bir hata!";
}
