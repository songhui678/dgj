<?php

namespace mobile\controllers;
use common\modelsgii\Page;

class CustomController extends \yii\web\Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		$content = Page::find()->where(array('name' => 'custom', 'type' => 2))->one();
		return $this->render('route', array('content' => $content));
	}

}
