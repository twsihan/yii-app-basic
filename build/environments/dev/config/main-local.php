<?php

return [
    'components' => [
        'cache' => ['class' => 'yii\caching\FileCache'],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
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
