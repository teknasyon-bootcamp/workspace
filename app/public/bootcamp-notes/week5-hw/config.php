<?php

/**
 * Uygulama ile ilgili konfigürasyon dosyasıdır. Burada **değerler** haricinde
 * bir değişiklik yapmayınız!
 */

return [
    /*
    |--------------------------------------------------------------------------
    | Database Engine
    |--------------------------------------------------------------------------
    |
    | Uygulama içerisinde kullanılacak olan veritabanı sürücüsünü belirleyen
    | konfigürasyondur. `mysql` değerini alması durumunda ilgili MySQL sürücüsü
    | uygulamada kullanılmalıdır. `mongodb` değerini alması durumunda ilgili
    | MongoDB sürücüsü uygulamada kullanılmalıdır.
    |
    */
    'engine' => "mysql", // mysql, mongodb

    /*
    |--------------------------------------------------------------------------
    | Database Configuration
    |--------------------------------------------------------------------------
    |
    | Veritabanı sürücüsünde kullanılacak olan bağlantı bilgileridir.
    |
    */
    'host' => 'mariadb',
    'port' => 3306,
    'user' => 'default',
    'password' => 'secret',
    'options' => [],

    /*
    |--------------------------------------------------------------------------
    | Logging Configuration
    |--------------------------------------------------------------------------
    |
    | Uygulama içerisinde loglamanın nasıl yapılacağını belirten
    | konfigürasyondur. Burada alabileceği değerler: `null`, `file` ve
    | `database`. `null` alması durumunda herhangi bir loglama işlemi
    | yapılmamalıdır. `file` olması durumunda 'belirlenmiş' bir dosyaya loglama
    | yapılmalıdır. `database` olması durumunda 'belirlenmiş' bir
    | tablo/koleksiyona ilgili loglama yapılmalıdır.
    |
    */
    'logging' => 'file', // database, file, null
];
