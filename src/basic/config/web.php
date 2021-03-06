<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$users = require __DIR__ . '/users.php';

$params['users'] = $users;

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'response' => [
            //'format' => \yii\web\Response::FORMAT_JSON,
            'charset' => 'UTF-8',
            // ...
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'E_EY2iApSV24sINhlzl_lMXvwqQx-w5s',
            'parsers' => ['application/json' => 'yii\web\JsonParser',],
            
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        
        'urlManager' => [
                            'enablePrettyUrl' => true,
                            'enableStrictParsing' => true,
                            'showScriptName' => false,
                            'rules' => [
                                ['class' => 'yii\rest\UrlRule', 'controller' => 'users'],
                                ['class' => 'yii\rest\UrlRule', 'controller' => 'album'],
                                ['class' => 'yii\rest\UrlRule', 'controller' => 'photo'],
                                ['class' => 'yii\web\UrlRule', 'pattern' => '/', 'route' => 'site/index'],
                                ['class' => 'yii\web\UrlRule', 'pattern' => '/site/<action:>', 'route' => 'site/<action>'],
                                ['class' => 'yii\web\UrlRule', 'pattern' => '/create/<action:>', 'route' => 'create/<action>',],
                                ['class' => 'yii\web\UrlRule', 'pattern' => '/arsec/<action:>', 'route' => 'arsec/<action>',],
                            ],
                        ],
        
    ],
    'params' => $params,    
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
