<?php

header("Content-type: text/xml");

echo <<<XML
<?xml version='1.0' encoding='UTF-8'?>
<message>
    <from>Eray</from>
    <to>Orkun</to>
    <contents>Selam!</contents>
    <time>2021-02-21 01:50:32</time>
</message>
XML;

