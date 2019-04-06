<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 30/03/2019
 * Time: 10:52
 */


return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock;port=8889;dbname=testbd',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
