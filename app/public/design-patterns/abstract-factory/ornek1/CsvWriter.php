<?php

interface CsvWriter
{
    public function write(string $line): void;
}
