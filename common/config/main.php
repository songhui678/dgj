<?php

return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',

	/* 源语言 */
	'sourceLanguage' => 'zh-CN',
	/* 目标语言 */
	'language' => 'zh-CN',

	'components' => [
		'cache' => [
			'class' => 'yii\caching\FileCache',
			// 'class' => 'yii\redis\Cache',
			// 'redis' => [
			// 	'hostname' => 'localhost',
			// 	'port' => 6379,
			// 	'database' => 0,
			// ],
		],
		/**
		 * 多语言管理，
		 * 将“源语言”翻译成“目标语言”，必须使用\Yii::t('common','中文')，当源语言和目标语言相同时默认不翻译
		 * common/messages中必须存在“目标语言(en-US)”文件夹，且对应语言文件中存在：'中文'=>'English'
		 */
		'i18n' => [
			'translations' => [
				'*' => [
					'class' => 'yii\i18n\PhpMessageSource',
					'basePath' => '@common/messages',
					'fileMap' => [
						'common' => 'common.php',
						'backend' => 'backend.php',
						'frontend' => 'frontend.php',
					],
				],
			],
		],

		'urlManager' => [
			'class' => 'yii\web\UrlManager',
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			// 'enableStrictParsing' => true,
			// 'suffix' => '.html',
			'rules' => [
				//首页
				'/' => 'index/index',
				'/about/' => 'about/index',
				'/product/' => '/product/index',
				'/support/' => '/support/index',
				'/service/' => '/service/index',
				'/service/show/<id:\d+>.html' => '/service/show',
				'/article/' => '/article/index',
				'/article/show/<id:\d+>.html' => '/article/show',
				'/product/cate/<id:\d+>/' => '/product/cate',
				'/product/cate/<id:\d+>/<page:\d+>' => 'product/cate',
				'/product/show/<id:\d+>.html' => '/product/show',
				'/contact/' => '/contact/index',
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			],
		],
	],
];
