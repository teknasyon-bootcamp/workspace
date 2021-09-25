<?php

class UnixCsvWriter implements CsvWriter
{
    public function write(string $line): void
    {
        echo "Unix ortamı için CSV yazıcı";
    }
}
