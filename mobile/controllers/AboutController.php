<?php

namespace mobile\controllers;

use common\modelsgii\Page;
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
		$content = Page::find()->where(array('name' => 'about', 'type' => 2))->one();
		return $this->render('index', array('content' => $content));
	}

}
