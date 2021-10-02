<?php

class WindowsJsonWriter implements JsonWriter
{
    public function write(string $data, bool $pretty): void
    {
        echo "Windows ortamı için Json dosyası oluşturuluyor...";
    }
}
