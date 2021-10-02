<?php

function jsonYaz(WriterFactory $factory) {
    $jsonYazici = $factory->createJsonWriter();
    $jsonYazici->write("Merhaba!", true);
}

jsonYaz(new WindowsWriterFactory());