<?php

echo 'Current script owner: ' . get_current_user() . PHP_EOL;
echo 'whoami: ' . exec('whoami') . PHP_EOL;
touch("testfile.txt");
file_put_contents("testfile.txt", PHP_INT_MAX);
