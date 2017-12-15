<?php

namespace mobile\controllers;

class SearchController extends \yii\web\Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		return $this->render('index');
	}

}
