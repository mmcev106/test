<?php

return [
    'application' => [
        'base_path' => '/var/www/html/symphonygit/',
        'app_name' => 'git2'
    ],    
    'database' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => 'mysql',
            'port' => '3306',
            'db' => 'github_repositories',
            'user' => 'root',
            'pass' => 'dev',
            'prefix' => ''
        ]
    ],
];