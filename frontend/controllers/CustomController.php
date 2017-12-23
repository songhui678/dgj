<?php

namespace frontend\controllers;
use common\modelsgii\Page;

class CustomController extends \yii\web\Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		$content = Page::find()->where(array('name' => 'custom', 'type' => 1))->one();
		return $this->render('index', array('content' => $content));
	}

}
