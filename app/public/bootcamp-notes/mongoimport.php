<?php

$files = ['units', 'civilizations', 'structures'];

$manager = new MongoDB\Driver\Manager('mongodb://mongo/');

foreach ($files as $file) {
  $bulk = new MongoDB\Driver\BulkWrite;

  $content = json_decode(file_get_contents(__DIR__."/{$file}.json"));
  foreach ($content->{$file} as $item) {
    $bulk->insert($item);    
  }

  $result = $manager->executeBulkWrite("test_environment.{$file}", $bulk);
  printf("Inserted %d documents for %s".PHP_EOL, $result->getInsertedCount(), $file);
}
