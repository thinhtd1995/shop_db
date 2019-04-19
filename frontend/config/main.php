<?php
use yii\web\Request;
$request = new Request();
$baseUrl = str_replace('/frontend/web','', $request->baseUrl);
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl'=>$baseUrl,
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
                //'san-pham'=>'category/product',
                //'san-pham/chi-tiet'=>'details/product',

                // 'tim-kiem'=>'/category/search',
                
                 [
                    'pattern'=>'danh-muc-san-pham.html',
                    'route'=>'product/index',
                    'defaults'=>[
                        'alias'=>'danh-muc-san-pham'
                    ]
                  ],
                   [
                    'pattern'=>'danh-muc-tin-tuc.html',
                    'route'=>'news/index',
                    'defaults'=>[
                        'alias'=>'danh-muc-tin-tuc'
                    ]
                  ],
                // [
                //     'pattern'=>'danh-muc-san-pham.html',
                //     'route'=>'category/product',
                //     'defaults'=>[
                //         'alias'=>'danh-muc-san-pham'
                //     ]
                //   ],
                //    [
                //     'pattern'=>'danh-muc-tin-tuc.html',
                //     'route'=>'category/news',
                //     'defaults'=>[
                //         'alias'=>'danh-muc-tin-tuc'
                //     ]
                //   ],
                  
               
                 '<alias:[\w-]+>'=>'site/index',
                // '/<alias:[\w-]+>.html' => 'category/product',
                // '/<alias:[\w-]+>.html' => 'category/news',


               '/san-pham/<alias:[\w-]+>.html'=>'product/details',
                
                //  '/dich-vu/<alias:[\w-]+>.html' => 'product/index',
                 '/tin-tuc/<slug>.html'=>'/news/details',

            ],
        ],
        
    ],
    'params' => $params,
];
