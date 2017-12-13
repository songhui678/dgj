<?php

namespace frontend\controllers;

use common\modelsgii\Article;
use common\modelsgii\Goods;
use yii\web\Controller;

class ProductController extends Controller {

	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		return $this->render('index');
	}

	public function actionShow($id) {
		$goods = Goods::find()->where(array("goods_id" => $id, "status" => 1))->one();
		//最新资讯
		$articleList = Article::find()->where(array("status" => 1))->orderBy('create_time asc')->limit(10)->all();
		//推荐产品
		$goodsList = array();
		if ($goods) {
			$goodsList = Goods::find()->where(array("cat_id" => $goods->cat_id, "status" => 1))->orderBy('create_time asc')->limit(3)->all();
		}

		return $this->render('show', array('goods' => $goods, 'articleList' => $articleList, 'goodsList' => $goodsList));
	}
}
