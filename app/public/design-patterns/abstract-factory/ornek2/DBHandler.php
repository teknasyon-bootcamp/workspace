<?php

interface DBHandler
{
    public function all(string $table): array;
}
