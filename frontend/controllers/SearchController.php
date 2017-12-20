<?php

namespace frontend\controllers;

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
		return $this->render('index', array('pages' => $pages, 'goodsList' => $goodsList));
	}

}
