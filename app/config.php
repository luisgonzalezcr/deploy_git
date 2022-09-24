<?php
define('DS'   , DIRECTORY_SEPARATOR);
define('APP'  , dirname(__DIR__).DS.'app');
define('VIEWS', APP . DS . 'views');
define('INC'  , VIEWS . DS . 'inc' . DS);
$config = [
    'db' => [
        'host' => 'containers-us-west-16.railway.app',
        'port' => '6351',
        'name' => 'railway',
        'user' => 'root',
        'pass' => 'CX3fVmtRwMAYGqzxefKh',
    ],
];
// $config = [
//     'db' => [
//         'host' => '127.0.0.1',
//         'port' => '3306',
//         'name' => 'gonzapp',
//         'user' => 'root',
//         'pass' => '',
//     ],
// ];
