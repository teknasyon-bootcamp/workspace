<?php

$input = fopen("php://stdin", "r");
$command = null;

while ($command != "quit") {
  $cwd = getcwd();

  echo "-- Dizin: " . $cwd . " --" . PHP_EOL;

  foreach(scandir($cwd) as $file) {
    echo "- " . $file . PHP_EOL;
  }

  echo ">>> ";
  $command = trim(fgets($input));
  $commandArgs = explode(" ", $command);
  $commandType = reset($commandArgs);

  switch ($commandType) {
  case "dir":
    if (!file_exists($commandArgs[1]))
      continue 2;
    chdir($commandArgs[1]);
    break;
  case "mkdir":
    if (file_exists($commandArgs[1]))
      continue 2;
    mkdir($commandArgs[1]);
    break;
  case "create":
    if (file_exists($commandArgs[1]))
      continue 2;
    touch($commandArgs[1]);
    break;
  case "file":
    if (!file_exists($commandArgs[1]))
      continue 2;
    echo file_get_contents($commandArgs[1]);
    break;
  }

}

echo "Bye!";
