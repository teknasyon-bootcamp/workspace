<?php

/*
$db = new MongoDB\Driver\Manager('mongodb://mongo:27017');

$query = new MongoDB\Driver\Query([], ['sort' => ['age' => -1], 'limit' => 2]);
$result = $db->executeQuery('test_environment.users', $query);
var_dump($result->toArray());
 */

$collection = (new MongoDB\Client)->test_environment->users;


