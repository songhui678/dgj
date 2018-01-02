<?php

namespace mobile\controllers;
use common\modelsgii\Goods;
use common\modelsgii\Page;

class ContactController extends \yii\web\Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		$content = Page::find()->where(array('name' => 'contact', 'type' => 2))->one();
		$goodsList = Goods::find()->where(array("status" => 1))->orderBy('sort asc')->limit(5)->all();
		return $this->render('index', array('content' => $content, 'goodsList' => $goodsList));

	}

	public function actionRoute() {
		$content = Page::find()->where(array('name' => 'route', 'type' => 2))->one();
		return $this->render('route', array('content' => $content));
	}
}
