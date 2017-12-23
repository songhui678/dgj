<?php

namespace mobile\controllers;
use common\modelsgii\Page;

class SupportController extends \yii\web\Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		$content = Page::find()->where(array('name' => 'suport', 'type' => 2))->one();
		return $this->render('index');
	}

}
