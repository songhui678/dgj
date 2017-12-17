<?php

namespace mobile\controllers;
use common\modelsgii\Article;
use common\modelsgii\ArticleCat;
use common\modelsgii\Goods;
use yii\data\Pagination;
use yii\web\Controller;

class ArticleController extends Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';

	public function actionIndex($id = 1) {

		$cate = ArticleCat::find()->where(array("pid" => 0, "id" => $id))->one();

		$articleCount = Article::find()->where(array("category_id" => $id, "status" => 1))->count('id');
		$pages = new Pagination(['totalCount' => $articleCount, 'pageSize' => '10']);
		$articleList = Article::find()->where(array("category_id" => $id, "status" => 1))->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();

		return $this->render('index', array('cate' => $cate, 'articleList' => $articleList, 'pages' => $pages));
	}

	public function actionShow($id) {
		$article = Article::find()->where(array("id" => $id, "status" => 1))->one();
		$cate = ArticleCat::find()->where(array("pid" => 0, "id" => $article->category_id))->one();
		//推荐资讯
		$tujianList = Article::find()->where(array("status" => 1))->orderBy('create_time desc,sort asc')->limit(3)->all();
		$goodsList = Goods::find()->where(array("cat_id" => $id, "status" => 1))->orderBy('create_time desc,sort asc')->limit(2)->all();

		return $this->render('show', array('cate' => $cate, 'article' => $article, 'tujianList' => $tujianList, 'goodsList' => $goodsList));
	}
}
