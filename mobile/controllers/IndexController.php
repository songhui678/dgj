<?php

namespace mobile\controllers;

use yii\web\Controller;

class IndexController extends Controller {
	/**
	 * @var string
	 */
	public $layout = 'main1';

	public function actionIndex() {
		$this->getView()->title = "your title";
		$this->getView()->metaTags['keywords'] = 'keywords';
		$this->getView()->metaTags['description'] = 'description';
		//phpinfo();
		return $this->render('index');
	}

	public function actionError() {
		//phpinfo();
		return $this->render('error');
	}

}
