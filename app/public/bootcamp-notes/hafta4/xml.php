<?php

$xml = simplexml_load_file(__DIR__."/data.xml");

foreach ($xml as $user) {
  echo "From: " . $user->from . "<br>";
  echo "To: " . $user->to . "<br>";
  echo "Message: " . $user->content . "<br>";
  echo "<br>";
}
