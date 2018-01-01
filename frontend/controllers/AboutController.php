<?php

namespace frontend\controllers;
use common\modelsgii\Ad;
use common\modelsgii\AdCat;
use common\modelsgii\Page;
use yii\web\Controller;

class AboutController extends Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';

	public function actionIndex() {

		$this->getView()->title = "关于新默真科技";
		$content = Page::find()->where(array('name' => 'about', 'type' => 1))->one();
		$adCate = AdCat::find()->where(array("name" => 'about', "status" => 1))->one();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "status" => 1))->orderBy('sort asc')->limit(5)->all();
			// var_dump($adverList);exit;
		}

		return $this->render('index', array('content' => $content, 'adverList' => $adverList));
	}
}
