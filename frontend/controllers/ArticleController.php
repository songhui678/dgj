<?php

namespace frontend\controllers;
use common\modelsgii\Article;
use common\modelsgii\ArticleCat;
use yii\web\Controller;

class ArticleController extends Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';

	public function actionIndex($id = 1) {

		$cate = ArticleCat::find()->where(array("pid" => 0, "id" => $id))->one();
		$cateList = ArticleCat::find()->where(array("pid" => 0))->orderBy('sort asc')->all();
		$articleList = Article::find()->where(array("category_id" => $id, "status" => 1))->orderBy('sort asc')->all();
		$articleList = new ArrayDataProvider([
			'allModels' => $articleList,
			'pagination' => [
				'pageSize' => 10,
			],
		]);
		// var_dump($cateList);exit;
		//phpinfo();
		return $this->render('index', array('cateList' => $cateList, 'cate' => $cate, 'articleList' => $articleList));
	}

	public function actionCate($id) {

		// $cateList = new ArrayDataProvider([
		//  'allModels' => $lists,
		//  'pagination' => [
		//      'pageSize' => 30,
		//  ],
		// ]);
		// var_dump($cateList);exit;
		//phpinfo();
		return $this->render('cate', array('cate' => $cate));
	}

	public function actionShow($id) {
		$cate = ArticleCat::find()->where(array("pid" => 0, "id" => $id))->one();
		// $cateList = new ArrayDataProvider([
		//  'allModels' => $lists,
		//  'pagination' => [
		//      'pageSize' => 30,
		//  ],
		// ]);
		// var_dump($cateList);exit;
		//phpinfo();
		return $this->render('show', array('cate' => $cate));
	}
}
