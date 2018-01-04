<?php

namespace frontend\controllers;
use common\modelsgii\Ad;
use common\modelsgii\AdCat;
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
		$pages = new Pagination(['totalCount' => $articleCount, 'pageSize' => '10']);
		$articleList = Article::find()->where(array("category_id" => $id, "status" => 1))->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();
		$toutiaoArticle = Article::find()->where(array("category_id" => $id, "status" => 2))->orderBy('create_time desc')->one();
		$adCate = AdCat::find()->where(array("name" => 'article', "status" => 1))->one();
		$adverList = array();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "status" => 1))->orderBy('sort asc')->limit(5)->all();
			// var_dump($adverList);exit;
		}
		return $this->render('index', array('cateList' => $cateList, 'cate' => $cate, 'articleList' => $articleList, 'pages' => $pages, "toutiaoArticle" => $toutiaoArticle, 'adverList' => $adverList));
	}

	public function actionShow($id) {
		$article = Article::find()->where(array("id" => $id, "status" => 1))->one();
		// Article::updateByPk($id, array('view' => $article->view + 1));
		$article->view = $article->view + 1;
		$article->save();
		$cate = ArticleCat::find()->where(array("pid" => 0, "id" => $article->category_id))->one();
		//推荐资讯
		$tujianList = Article::find()->where(array("status" => 1))->orderBy('create_time asc')->limit(3)->all();
		//相关资讯
		$xiangguanList = Article::find()->where(array("status" => 1))->orderBy('create_time asc')->limit(3)->all();
		// Article::findBySql('SELECT * FROM user')->one();  此方法是用 sql  语句查询 user 表里面的一条数据；
		$sql = "select id,title from yii2_article where id<" . $id . " and category_id=" . $article->category_id . " and status=1 order by id asc limit 1";
		$nextArticle = Article::findBySql($sql)->one();

		$sql = "select id,title from yii2_article where id>" . $id . " and category_id=" . $article->category_id . " and status=1 order by id asc limit 1";
		$beforeArticle = Article::findBysql($sql)->one();
		$adCate = AdCat::find()->where(array("name" => 'article', "status" => 1))->one();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "status" => 1))->orderBy('sort asc')->limit(5)->all();
			// var_dump($adverList);exit;
		}
		return $this->render('show', array('cate' => $cate, 'article' => $article, 'tujianList' => $tujianList, 'xiangguanList' => $xiangguanList, 'nextArticle' => $nextArticle, 'beforeArticle' => $beforeArticle, 'adverList' => $adverList));
	}
}
