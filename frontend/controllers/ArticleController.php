<?php

namespace frontend\controllers;
use common\modelsgii\Article;
use common\modelsgii\ArticleCat;
use yii\data\Pagination;
use yii\web\Controller;

class ArticleController extends Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';

	public function actionIndex($id = 1) {

		$cate = ArticleCat::find()->where(array("pid" => 0, "id" => $id))->one();
		$cateList = ArticleCat::find()->where(array("pid" => 0))->orderBy('sort asc')->all();
		$articleCount = Article::find()->where(array("category_id" => $id, "status" => 1))->count('id');
		$pages = new Pagination(['totalCount' => $articleCount, 'pageSize' => '2']);
		$articleList = Article::find()->where(array("category_id" => $id, "status" => 1))->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();
		$toutiaoArticle = Article::find()->where(array("category_id" => $id, "status" => 2))->orderBy('create_time desc')->one();
		// var_dump($cateList);exit;
		//phpinfo();
		return $this->render('index', array('cateList' => $cateList, 'cate' => $cate, 'articleList' => $articleList, 'pages' => $pages, "toutiaoArticle" => $toutiaoArticle));
	}

	public function actionShow($id) {
		$article = Article::find()->where(array("id" => $id, "status" => 1))->one();
		$cate = ArticleCat::find()->where(array("pid" => 0, "id" => $article->category_id))->one();
		//推荐资讯
		$tujianList = Article::find()->where(array("status" => 1))->orderBy('create_time asc')->limit(3)->all();
		//相关资讯
		$xiangguanList = Article::find()->where(array("status" => 1))->orderBy('create_time asc')->limit(3)->all();
		$nextArticle = Article::find()->where(array('status' => 1, 'category_id' => $article->category_id, 'id' => ['>', 'id', $id]))->select(array('id', 'title'))->orderBy('id asc')->one();

		$beforeArticle = Article::find()->where(array('status' => 1, 'category_id' => $article->category_id, 'id' => ['<', 'id', $id]))->select(array('id', 'title'))->orderBy('id desc')->one();

		return $this->render('show', array('cate' => $cate, 'article' => $article, 'tujianList' => $tujianList, 'xiangguanList' => $xiangguanList, 'nextArticle' => $nextArticle, 'beforeArticle' => $beforeArticle));
	}
}
