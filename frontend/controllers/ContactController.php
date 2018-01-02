<?php

namespace frontend\controllers;
use common\modelsgii\Ad;
use common\modelsgii\AdCat;
use common\modelsgii\Page;

class ContactController extends \yii\web\Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		$adCate = AdCat::find()->where(array("name" => 'contact', "status" => 1))->one();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "status" => 1))->orderBy('sort asc')->limit(5)->all();
			// var_dump($adverList);exit;
		}
		$content = Page::find()->where(array('name' => 'contact', 'type' => 1))->one();
		$goodsList = Goods::find()->where(array("status" => 1))->orderBy('sort asc')->limit(5)->all();
		return $this->render('index', array('content' => $content, 'adverList' => $adverList, 'goodsList' => $goodsList));
	}

}
