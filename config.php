<?php
return [
    'components' => [
//     		'db' => [
//     				'class' => 'izi\db\Connection',
//     				'dsn' => 'mysql:host='.dString('WXBtZFdYQnRaRs3h2WTsqTJGc2FHOXpkQT09').';dbname='.dString('TzIwTVR6SXsdUV1JoZEdGaVlYTmxYMnh1ZG00PQ=='),
//     				'username' => dString('M0g3WU0wZzNXV1JoZEdGaVlYTmxYMnh1ZG00PQ=='),
//     				'password' => dString('SWtTb1NXdFRiMU5pUWtKSVUwaFI='),
//     				'charset' => 'utf8',
//     		],

	        //'mailer' => [
	            //'class' => 'yii\swiftmailer\Mailer',
	           // 'viewPath' => '@common/mail',
	          // 'class'=>'\PHPMailer\PHPMailer\PHPMailer'
	        //],
    	],
		'language'=>'vi',
		'bootstrap' => ['gii'],
		'modules' => [
				'gii' => [
						'class' => 'yii\gii\Module',
						'allowedIPs' => ['127.0.0.1', '::1','222.252.0.171'],  //allowing ip's,
						//'password'=>'13573368'
				],
				// ...
		],
];
