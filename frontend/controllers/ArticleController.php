<?php

namespace frontend\controllers;

use common\modelsgii\ArticleCat;
use yii\web\Controller;

class ArticleController extends Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';

	public function actionIndex() {
		$cateList = ArticleCat::find()->where(array("pid" => 0))->orderBy('sort asc')->all();
		// $cateList = new ArrayDataProvider([
		// 	'allModels' => $lists,
		// 	'pagination' => [
		// 		'pageSize' => 30,
		// 	],
		// ]);
		// var_dump($cateList);exit;
		//phpinfo();
		return $this->render('index', array('cateList' => $cateList));
	}

	public function actionCate($id) {
		$cate = ArticleCat::find()->where(array("pid" => 0, "id" => $id))->one();
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
}
