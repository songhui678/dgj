<?php

namespace mobile\controllers;
use Yii;

class SearchController extends \yii\web\Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		var_dump(Yii::$app->request->queryParams);exit;
		$key = Yii::$app->request->queryParams('key');
		$type = Yii::$app->request->queryParams('type');
		if ($type == "all") {
			$articleModel = new ArticleSearch();
			$goodsModel = new GoodsSearch();
			$articleProvider = $articleModel->search(Yii::$app->request->queryParams);
			$goodsProvider = $goodsModel->search(Yii::$app->request->queryParams);

			$goodsCount = Goods::find()->where(array("cat_id" => $id, "status" => 1))->count('goods_id');
			$pages = new Pagination(['totalCount' => $goodsCount, 'pageSize' => '10']);
			$goodsList = Goods::find()->where(array("cat_id" => $id, "status" => 1))->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();

			return $this->render('index', [
				'articleProvider' => $articleProvider,
				'goodsProvider' => $goodsProvider,
			]);

		} elseif ($type == "product") {
			$goodsModel = new GoodsSearch();
			$goodsProvider = $goodsModel->search(Yii::$app->request->queryParams);
			return $this->render('index', [
				'goodsProvider' => $goodsProvider,
			]);

		} else {
			$articleModel = new ArticleSearch();
			$articleProvider = $articleModel->search(Yii::$app->request->queryParams);
			return $this->render('index', [
				'articleProvider' => $articleProvider,
			]);
		}
	}

}
