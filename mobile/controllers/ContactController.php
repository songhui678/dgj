<?php

namespace mobile\controllers;

class ContactController extends \yii\web\Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		return $this->render('index');
	}

	public function actionRoute() {
		//phpinfo();
		return $this->render('route');
	}
}
