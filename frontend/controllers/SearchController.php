<?php

namespace frontend\controllers;
use common\modelsgii\Ad;
use common\modelsgii\AdCat;
use common\modelsgii\Article;
use common\modelsgii\Goods;
use Yii;
use yii\data\Pagination;

class SearchController extends \yii\web\Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {

		$key = \Yii::$app->request->get('search_keyword');

		$goodsCount = Goods::find()->where(["status" => 1])->andFilterWhere(['like', 'goods_name', $key])->count('goods_id');
		$articleCount = Article::find()->where(["status" => 1])->andFilterWhere(['like', 'title', $key])->count('id');

		$pages = new Pagination(['totalCount' => $goodsCount + $articleCount, 'pageSize' => '10']);
		$goodsList = Goods::find()->where(array("status" => 1))->andFilterWhere(['like', 'goods_name', $key])->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();
		$articleList = Article::find()->where(array("status" => 1))->andFilterWhere(['like', 'title', $key])->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();

		$adCate = AdCat::find()->where(array("name" => 'search', "status" => 1))->one();
		$adverList = array();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "type" => 1))->orderBy('sort asc')->limit(5)->all();
			// var_dump($adverList);exit;
		}

		return $this->render('index', array('pages' => $pages, 'search_keyword' => $key, 'goodsList' => $goodsList, 'articleList' => $articleList, 'adverList' => $adverList));
	}

}
