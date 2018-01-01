<?php

namespace frontend\controllers;

use common\helpers\ArrayHelper;
use common\modelsgii\Ad;
use common\modelsgii\Goods;
use common\modelsgii\GoodsCat;
use common\modelsgii\Links;
use yii\web\Controller;

class IndexController extends Controller {
	/**
	 * @var string
	 */
	public $layout = 'main1';

	public function actionIndex() {
		$cateList = $this->cateTree();
		$adList = Ad::find()->where(array("cate_id" => 8, "status" => 1))->orderBy('sort asc')->limit(5)->all();
		$cateIdArr = array_column($cateList, 'id');
		$where['cat_id'] = $cateIdArr;
		$where['status'] = 1;
		$goodsList = Goods::find()->where($where)->orderBy('sort asc')->limit(25)->all();
		$linksList = Links::find()->where(array("status" => 1))->orderBy('sort asc')->all();
		return $this->render('index', array('cateList' => $cateList, 'goodsList' => $goodsList, 'linksList' => $linksList, 'adList' => $adList));
	}

	public function actionError() {
		//phpinfo();
		return $this->render('error');
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
