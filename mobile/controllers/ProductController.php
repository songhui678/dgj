<?php

namespace mobile\controllers;

use common\helpers\ArrayHelper;
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
		$id = 1;
		$this->getView()->title = "产品中心-新默真科技（北京）有限公司";
		$this->getView()->metaTags['keywords'] = '美国VirTis冻干机，冷冻干燥机，超微粉气流粉碎机，微射流均质机，加拿大Simport耗材';
		$this->getView()->metaTags['description'] = '进口冻干机 美国VirTis冻干机-新默真科技，为您提供美国SP SCIENTIFIC公司生产的最佳配置的冷冻干燥设备，包括实验型冻干机、中试型冻干机、小型生产型及产业型冻干机；协助您选择最高性能的酶标仪；为您推荐最稳定的蠕动泵和灌装机！新默真科技，为您提供冻干机、酶标仪、蠕动泵和灌装机等产品专业的技术咨询和服务。';
		$cateList = $this->cateTree();
		$goodsCount = Goods::find()->where(array("cat_id" => $id, "status" => 1))->count('goods_id');
		$pages = new Pagination(['totalCount' => $goodsCount, 'pageSize' => '10']);
		$goodsCateArr = ArrayHelper::getSubs($id);
		$goodsList = Goods::find()->where(array("cat_id" => $goodsCateArr, "status" => 1))->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();

		return $this->render('index', array('pages' => $pages, 'goodsList' => $goodsList, 'cateList' => $cateList));

	}
	/**
	 * [actionShow 产品详情]
	 * @Author   songhui@daojia.com.cn
	 * @DateTime 2017-12-15T11:57:16+0800
	 * @param    [type]                   $id [description]
	 * @return   [type]                       [description]
	 */
	public function actionShow($id) {

		$cateList = $this->cateTree();
		$goods = Goods::find()->where(array("goods_id" => $id, "status" => 1))->one();
		$goods->view = $goods->view + 1;
		$goods->save();
		$this->getView()->title = $goods->goods_name . "-产品中心-新默真科技（北京）有限公司";
		$this->getView()->metaTags['keywords'] = $goods->keywords . '美国VirTis冻干机，冷冻干燥机，超微粉气流粉碎机，微射流均质机，加拿大Simport耗材';
		$this->getView()->metaTags['description'] = $goods->description;
		//最新资讯
		$articleList = Article::find()->where(array("status" => 1))->orderBy('create_time asc')->limit(3)->all();

		if (!empty($goods)) {
			return $this->render('show', array('goods' => $goods, 'articleList' => $articleList, 'cateList' => $cateList));
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

		$productCate = GoodsCat::find()->where(array("id" => $id, "status" => 1))->one();
		$this->getView()->title = $productCate->title . "-新默真科技（北京）有限公司";
		$this->getView()->metaTags['keywords'] = '美国VirTis冻干机，冷冻干燥机，超微粉气流粉碎机，微射流均质机，加拿大Simport耗材';
		$this->getView()->metaTags['description'] = '进口冻干机 美国VirTis冻干机-新默真科技，为您提供美国SP SCIENTIFIC公司生产的最佳配置的冷冻干燥设备，包括实验型冻干机、中试型冻干机、小型生产型及产业型冻干机；协助您选择最高性能的酶标仪；为您推荐最稳定的蠕动泵和灌装机！新默真科技，为您提供冻干机、酶标仪、蠕动泵和灌装机等产品专业的技术咨询和服务。';

		$cateList = $this->cateTree();
		$goodsCateArr = ArrayHelper::getSubs($id);
		$goodsCount = Goods::find()->where(array("cat_id" => $goodsCateArr, "status" => 1))->count('goods_id');
		$pages = new Pagination(['totalCount' => $goodsCount, 'pageSize' => '10']);
		$goodsList = Goods::find()->where(array("cat_id" => $goodsCateArr, "status" => 1))->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();

		//最新资讯
		$articleList = Article::find()->where(array("status" => 1))->orderBy('create_time asc')->limit(10)->all();

		if (!empty($productCate)) {
			return $this->render('cate', array('productCate' => $productCate, 'pages' => $pages, 'articleList' => $articleList, 'goodsList' => $goodsList, 'cateList' => $cateList));
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
