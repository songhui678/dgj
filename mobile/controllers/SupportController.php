<?php

namespace mobile\controllers;

class SupportController extends \yii\web\Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		return $this->render('index');
	}

}
