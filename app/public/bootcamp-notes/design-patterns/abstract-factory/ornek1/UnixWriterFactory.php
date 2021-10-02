<?php

class UnixWriterFactory
{
    public function createJsonWriter(): JsonWriter
    {
        return new UnixJsonWriter();
    }

    public function createCsvWriter(): CsvWriter
    {
        return new UnixCsvWriter();
    }
}
