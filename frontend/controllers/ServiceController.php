<?php

namespace frontend\controllers;
use common\modelsgii\Page;

class ServiceController extends \yii\web\Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		$content = Page::find()->where(array('name' => 'service', 'type' => 1))->one();
		return $this->render('index', array('content' => $content));
	}

}
