<?php

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Monolog settings
        'logger' => [
            'name'      => 'slim-app',
            'path'      => __DIR__ . '/../logs/app.log',
            'timezone'  => 'Asia/Jerusalem',
            'level'     => 'DEBUG',             
        ],

        // Twig settings        
        'view' => [
            'template_path' => __DIR__ . '/../resources/views/',
            'twig' => [
                'cache' => __DIR__ . '/../caches/',
                'debug' => true,
            ],
        ],

        // Eloquent settings
        'db' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'skltn',
            'username'  => 'root',
            'password'  => getenv('DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
        
    ],
];
