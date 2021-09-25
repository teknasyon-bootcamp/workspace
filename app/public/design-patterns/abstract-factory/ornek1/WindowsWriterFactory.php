<?php

class WindowsWriterFactory
{
    public function createJsonWriter(): JsonWriter
    {
        return new WindowsJsonWriter();
    }

    public function createCsvWriter(): CsvWriter
    {
        return new WindowsCsvWriter();
    }
}
