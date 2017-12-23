<?php

namespace mobile\controllers;
use common\modelsgii\Page;

class ContactController extends \yii\web\Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		$content = Page::find()->where(array('name' => 'contact', 'type' => 2))->one();
		return $this->render('index', array('content' => $content));

	}

	public function actionRoute() {
		$content = Page::find()->where(array('name' => 'route', 'type' => 2))->one();
		return $this->render('route', array('content' => $content));
	}
}
