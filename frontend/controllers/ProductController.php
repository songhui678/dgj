<?php

namespace frontend\controllers;

use common\helpers\ArrayHelper;
use common\modelsgii\Ad;
use common\modelsgii\AdCat;
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
	public function actionIndex($id = 1) {

		$cate = GoodsCat::find()->where(array("id" => $id))->one();
		$cateList = $this->cateTree();
		// var_export($cateList);exit;
		$goodsCount = Goods::find()->where(array("cat_id" => $id, "status" => 1))->count('goods_id');
		$pages = new Pagination(['totalCount' => $goodsCount, 'pageSize' => '10']);
		$goodsList = Goods::find()->where(array("cat_id" => $id, "status" => 1))->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();
		$adCate = AdCat::find()->where(array("name" => 'product', "status" => 1))->one();
		$adverList = array();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "status" => 1))->orderBy('sort asc')->limit(5)->all();
			// var_dump($adverList);exit;
		}

		if (!empty($cate)) {
			return $this->render('index', array('cate' => $cate, 'cateList' => $cateList, 'pages' => $pages, 'goodsList' => $goodsList, 'adverList' => $adverList));
		} else {
			$this->redirect(array('index/error'));
		}
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
		$goods->view = $goods->view + 1;
		$goods->save();
		$cateList = $this->cateTree();
		//最新资讯
		$articleList = Article::find()->where(array("status" => 1))->orderBy('create_time asc')->limit(10)->all();

		$adCate = AdCat::find()->where(array("name" => 'product', "status" => 1))->one();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "status" => 1))->orderBy('sort asc')->limit(5)->all();
			// var_dump($adverList);exit;
		}
		//推荐产品
		$goodsList = array();
		if (!empty($goods)) {
			$goodsList = Goods::find()->where(array("cat_id" => $goods->cat_id, "status" => 1))->orderBy('create_time asc')->limit(3)->all();

			return $this->render('show', array('goods' => $goods, 'cateList' => $cateList, 'articleList' => $articleList, 'goodsList' => $goodsList, 'adverList' => $adverList));
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
		$cateList = $this->cateTree();
		// var_export($cateList);exit;
		$goodsCount = Goods::find()->where(array("cat_id" => $id, "status" => 1))->count('goods_id');
		$pages = new Pagination(['totalCount' => $goodsCount, 'pageSize' => '10']);
		$goodsList = Goods::find()->where(array("cat_id" => $id, "status" => 1))->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();
		$adCate = AdCat::find()->where(array("name" => 'product', "status" => 1))->one();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "status" => 1))->orderBy('sort asc')->limit(5)->all();
			// var_dump($adverList);exit;
		}

		if (!empty($cate)) {
			return $this->render('cate', array('cate' => $cate, 'cateList' => $cateList, 'pages' => $pages, 'goodsList' => $goodsList, 'adverList' => $adverList));
		} else {
			$this->redirect(array('index/error'));
		}
	}
	/**
	 * ---------------------------------------
	 * 获取栏目数据tree结构
	 * ---------------------------------------
	 */
	private function cateTree() {
		$lists = GoodsCat::find()->where(array("status" => 1))->orderBy('sort asc')->asArray()->all();
		$lists = ArrayHelper::list_to_tree($lists, 'id', 'pid');
		// $lists = ArrayHelper::jstree($lists);
		return $lists;
	}
}
