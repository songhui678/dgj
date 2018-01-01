<?php

namespace frontend\controllers;
use common\modelsgii\Ad;
use common\modelsgii\AdCat;

class SearchController extends \yii\web\Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		$key = Yii::$app->request->queryParams('key');
		$goodsCount = Goods::find()->where(["status" => 1])->andwhere('and', ['like', 'title', $key])->count('goods_id');
		$pages = new Pagination(['totalCount' => $goodsCount, 'pageSize' => '10']);
		$goodsList = Goods::find()->where(array("status" => 1))->andwhere('and', ['like', 'title', $key])->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();
		$adCate = AdCat::find()->where(array("name" => 'search', "status" => 1))->one();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "status" => 1))->orderBy('sort asc')->limit(5)->all();
			// var_dump($adverList);exit;
		}
		return $this->render('index', array('pages' => $pages, 'goodsList' => $goodsList, 'adverList' => $adverList));
	}

}
