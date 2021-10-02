<?php

/*
$x = 3;
$bootcamp = "Teknasyon";
$GLOBALS["x"] = 5;
echo "<pre>";
var_dump($GLOBALS["GLOBALS"]["GLOBALS"]["GLOBALS"]["bootcamp"]);
*/

/*
echo "<pre>";
var_dump($_GET);
*/

// echo 'Hoşgeldin ' . htmlspecialchars($_GET['name']). '<br>';

// Content Type
// - `application/x-www-form-urlencoded`
// - `multipart/form-data`

/*
echo "<pre>";
var_dump($_POST["name"]);
*/

/*
var_dump(json_decode(file_get_contents('php://input'), true));
*/
echo "<pre>";
var_dump( $argv );
