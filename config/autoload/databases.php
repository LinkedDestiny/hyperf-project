<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

return [
    'default' => [
        'driver' => env('DB_DRIVER', 'mysql'),
        'read'  => [
            'host' => env('DB_READ_HOST', '127.0.0.1'),
        ],
        'write'  => [
            'host' => env('DB_WRITE_HOST', '127.0.0.1'),
        ],
        'sticky'    => true,
        'database' => env('DB_DATABASE', 'test'),
        'username' => env('DB_USERNAME', 'root'),
        'password' => env('DB_PASSWORD', '123456'),
        'charset' => env('DB_CHARSET', 'utf8mb4'),
        'collation' => env('DB_COLLATION', 'utf8mb4_general_ci'),
        'prefix' => env('DB_PREFIX', 't_'),
        'port' =>  env('DB_PORT', '3306'),
        'pool' => [
            'min_connections' => 5,
            'max_connections' => 60,
            'connect_timeout' => 10.0,
            'wait_timeout' => 3.0,
            'heartbeat' => -1,
            'max_idle_time' => (float) env('DB_MAX_IDLE_TIME', 60),
        ],
        'commands' => [
            'gen:model' => [
                'path' => './app/Model',
                'force_casts' => true,
                'inheritance' => '\\Lib\\Framework\\BaseModel',
                'uses' => '',
            ],
        ],
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_STRINGIFY_FETCHES => false,
        ],
    ],
];
