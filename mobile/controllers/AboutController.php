<?php

namespace mobile\controllers;

use yii\web\Controller;

class AboutController extends Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';

	public function actionIndex() {
		$this->getView()->title = "关于新默真科技";
		$this->getView()->metaTags['keywords'] = 'keywords';
		$this->getView()->metaTags['description'] = 'description';

		return $this->render('index');
	}

}
