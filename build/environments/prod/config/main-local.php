<?php

return [
    'components' => [
        'cache' => ['class' => 'yii\caching\FileCache'],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii-app-basic',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
];
