<?php
 
if(defined('DB_DATABASE')){
    $db_components = [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host='.DB_HOSTNAME.';dbname='. DB_DATABASE,
            'username' => DB_USERNAME,
            'password' => DB_PASSWORD,
            'charset' => 'utf8',
        ],
    ];
}else{
    $db_components = [];
}

return [
    'id' => 'app-frontend',
    'basePath' => YII_OPEN_BASE_PATH,
    //'bootstrap' => ['log'],    
    'components' => array_merge([
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'FESMl5tOydNsFxeO6ow1zQ3OM3Q2D4i-',
            'enableCookieValidation' => false,
            'enableCsrfValidation' => false,
            'baseUrl'=>'',
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
        'mailer' => ['class' => 'izi\mailer\Mailer'],
        
        'language'=>'vi',
        
     
        
       
    ], $db_components),
];