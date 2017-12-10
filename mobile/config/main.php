<?php
$params = array_merge(
	require (__DIR__ . '/../../common/config/params.php'),
	require (__DIR__ . '/../../common/config/params-local.php'),
	require (__DIR__ . '/params.php'),
	require (__DIR__ . '/params-local.php')
);

return [
	'id' => 'app-home',
	'basePath' => dirname(__DIR__),
	'bootstrap' => ['log'],
	/* 默认路由 */
	'defaultRoute' => 'index',
	/* 控制器默认命名空间 */
	'controllerNamespace' => 'mobile\controllers',
	/* 模块 */

	'components' => [

		/* 修改默认的request组件 */
		'request' => [
			'class' => 'common\core\Request',
			'baseUrl' => Yii::getAlias('@mobileUrl'),
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
			'errorAction' => 'public/404',
		],

		'urlManager' => [
			'enablePrettyUrl' => env('MOBILE_PRETTY_URL', true),
			'showScriptName' => false,
			'rules' => [
			],
		],

	],
	'params' => $params,
];
