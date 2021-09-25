<?php

class WindowsCsvWriter implements CsvWriter
{
    public function write(string $line): void
    {
        echo "Windows ortamı için CSV yazıcı";
    }
}
