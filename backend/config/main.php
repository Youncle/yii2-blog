<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
//            'csrfCookie' => [
//                'httpOnly' => true,
//                'path' => '/admin',
//            ],
        ],
        'user' => [
            'identityClass' => 'common\models\base\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
//            'cookieParams' => [
//                'path' => '/admin',
//            ],
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
//                'site' => 'site/index',
//                'site/index' => 'site/index',
                'post' => 'post/index',
                'post/index' => 'post/index',
                'post/create' => 'post/create',
                'post/view/<id:\d+>' => 'post/view',
                'post/update/<id:\d+>' => 'post/update',
                'post/delete/<id:\d+>' => 'post/delete',
                'post/<slug>' => 'post/slug',
                'defaultRoute' => '/site/index',
            ],
        ],

    ],
    'params' => $params,
];
