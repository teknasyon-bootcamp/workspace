<?php

interface JsonWriter
{
    public function write(string $data, bool $pretty): void;
}
