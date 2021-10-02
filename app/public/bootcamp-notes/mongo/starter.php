<?php

$manager = new MongoDB\Driver\Manager('mongodb://mongo/');

$collections = ['units', 'civilizations', 'structures'];

array_map(
    static fn ($line): string => printf("%s%s", $line, PHP_SAPI === 'cli' ? PHP_EOL : "<br>"),
    array_map(
        static fn (
            MongoDB\Driver\WriteResult $result,
            string $collection
        ): string => sprintf("Inserted %d docs for the %s", $result->getInsertedCount(), $collection),
        array_map(
            static function (string $file) use ($manager) {
                $bulk = new MongoDB\Driver\BulkWrite;

                array_map(static function ($item) use ($bulk) {
                    $bulk->insert($item);
                }, json_decode(file_get_contents(__DIR__ . "/{$file}.json"), true, 512, JSON_THROW_ON_ERROR)[$file]);

                return $manager->executeBulkWrite("aoe2.{$file}", $bulk);
            },
            $collections
        ),
        $collections
    )
);
