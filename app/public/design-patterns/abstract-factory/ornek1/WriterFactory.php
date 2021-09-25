<?php

interface WriterFactory
{
    public function createJsonWriter(): JsonWriter;
    public function createCsvWriter(): CsvWriter;
}