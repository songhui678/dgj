<?php

namespace mobile\controllers;

use common\modelsgii\Article;
use common\modelsgii\Goods;
use common\modelsgii\GoodsCat;
use yii\data\Pagination;
use yii\web\Controller;

class ProductController extends Controller {

	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		return $this->render('index');
	}
	/**
	 * [actionShow 产品详情]
	 * @Author   songhui@daojia.com.cn
	 * @DateTime 2017-12-15T11:57:16+0800
	 * @param    [type]                   $id [description]
	 * @return   [type]                       [description]
	 */
	public function actionShow($id) {
		$goods = Goods::find()->where(array("goods_id" => $id, "status" => 1))->one();
		//最新资讯
		$articleList = Article::find()->where(array("status" => 1))->orderBy('create_time asc')->limit(10)->all();
		//推荐产品
		$goodsList = array();
		if (!empty($goods)) {
			$goodsList = Goods::find()->where(array("cat_id" => $goods->cat_id, "status" => 1))->orderBy('create_time asc')->limit(3)->all();

			return $this->render('show', array('goods' => $goods, 'articleList' => $articleList, 'goodsList' => $goodsList));
		} else {
			$this->redirect(array('index/error'));
		}
	}
	/**
	 * [actionCate 产品分类列表]
	 * @Author   songhui@daojia.com.cn
	 * @DateTime 2017-12-15T11:57:50+0800
	 * @return   [type]                   [description]
	 */
	public function actionCate($id) {
		$cate = GoodsCat::find()->where(array("id" => $id))->one();

		$goodsCount = Goods::find()->where(array("cat_id" => $id, "status" => 1))->count('goods_id');
		$pages = new Pagination(['totalCount' => $goodsCount, 'pageSize' => '10']);
		$goodsList = Goods::find()->where(array("cat_id" => $id, "status" => 1))->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();

		//最新资讯
		$articleList = Article::find()->where(array("status" => 1))->orderBy('create_time asc')->limit(10)->all();

		if (!empty($cate)) {
			return $this->render('cate', array('cate' => $cate, 'pages' => $pages, 'articleList' => $articleList, 'goodsList' => $goodsList));
		} else {
			$this->redirect(array('index/error'));
		}
	}

}
