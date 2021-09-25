<?php

class UnixJsonWriter implements JsonWriter
{
    public function write(string $data, bool $pretty): void
    {
        echo "Unix'e özel Json çıktısı veren yapı";
    }
}
