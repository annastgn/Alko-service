<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'pgsql:host=localhost;port=5432;dbname=alkoDB',
            'username' => 'postgres',
            'password' => '111233',
            'charset' => 'utf8',
        ],
    ],
];
