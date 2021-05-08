<?php

return [
    'driver' => 'sqlsrv',
    'url' => env('RECEIVER_DATABASE_URL'),
    'host' => env('RECEIVER_DB_HOST', 'localhost'),
    'port' => env('RECEIVER_DB_PORT', '1433'),
    'database' => env('RECEIVER_DB_DATABASE', 'forge'),
    'username' => env('RECEIVER_DB_USERNAME', 'forge'),
    'password' => env('RECEIVER_DB_PASSWORD', ''),
    'charset' => 'utf8',
    'prefix' => '',
    'prefix_indexes' => true,
];