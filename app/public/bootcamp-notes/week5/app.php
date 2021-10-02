<?php

// var_dump(extension_loaded("MongoDB"));

//$db = new MongoDB\Driver\Manager('mongodb://mongo');

/*
$write = new MongoDB\Driver\BulkWrite();
$write->insert(['email' => "eray.aydin@ozguryazilim.com.tr", "name" => "Eray", "surname" => "Aydın"]);
/*
$write->insert(['email' => "mucahit.yilmaz@ozguryazilim.com.tr", "name" => "Mücahit", "surname" => "Yılmaz"]);
 */

/*
$write->update(['email' => "mucahit.yilmaz@ozguryazilim.com.tr"], ['$set' => ['email' => "mucahityilmaz@mail.com"]]);
*/
/*
$write->delete(['email' => "eray.aydin@ozguryazilim.com.tr"]);

$result = $db->executeBulkWrite('week5.users', $write);

printf("Toplam eklenen: %d", $result->getInsertedCount());
printf("Toplam güncellenen: %d", $result->getModifiedCount());
printf("Toplam silinen: %d", $result->getDeletedCount());
printf("Toplam işlem: %d", $write->count());

// $client = new MongoDB\Client;

// var_dump($client->aoe2->units);
*/

/*
$query = new MongoDB\Driver\Query(
  ['email' => "mucahityilmaz@mail.com"],
  [
    'sort' => ['email' => 1],
    'limit' => 2,
    'projection' => ['name' => true, 'surname' => true]
  ]
);
$result = $db->executeQuery('week5.users', $query);
foreach ($result->toArray() as $user) {
  echo $user->name." ".$user->surname."<br>";
}
*/


require "../mongo/vendor/autoload.php";

$db = new MongoDB\Client("mongodb://mongo");

$units = $db->aoe2->units;

/*
// Tekil ekleme işlemi

$units = (new MongoDB\Client("mongodb://mongo"))->aoe2->units;

//$insert = $units->insertOne(['name' => "Muhteşem Savaşçı"]);
$insert = $units->insertMany([
  [
    'name' => "Muhteşem Okçu"
  ],
  [
    'name' => "Muhteşem Atlı"
  ]
]);

printf("Eklenen %d döküman oldu.", $insert->getInsertedCount());
//printf("Eklenen döküman ID %s", $insert->getInsertedId());
 */

foreach ($units->find(["hit_points" => ['$gt' => 10, '$lt' => 50]]) as $unit) {
  echo $unit["name"]." ({$unit["hit_points"]})<br>";
}
