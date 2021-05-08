<?php

return [
    'driver' => 'sqlsrv',
    'url' => env('BROADCASTER_DATABASE_URL'),
    'host' => env('BROADCASTER_DB_HOST', 'localhost'),
    'port' => env('BROADCASTER_DB_PORT', '1433'),
    'database' => env('BROADCASTER_DB_DATABASE', 'forge'),
    'username' => env('BROADCASTER_DB_USERNAME', 'forge'),
    'password' => env('BROADCASTER_DB_PASSWORD', ''),
    'charset' => 'utf8',
    'prefix' => '',
    'prefix_indexes' => true,
];