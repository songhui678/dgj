<?php

namespace mobile\controllers;
use common\helpers\ArrayHelper;
use common\modelsgii\Ad;
use common\modelsgii\AdCat;
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
		$this->getView()->title = "冻干机|进口冻干机|实验室冻干机|原位冻干机|纳米材料冻干机|制药冻干机|中试冻干机|生物制品冻干机-新默真科技（北京）有限公司";
		$this->getView()->metaTags['keywords'] = '美国VirTis冻干机，冷冻干燥机，超微粉气流粉碎机，微射流均质机，加拿大Simport耗材';
		$this->getView()->metaTags['description'] = '进口冻干机 美国VirTis冻干机-新默真科技，为您提供美国SP SCIENTIFIC公司生产的最佳配置的冷冻干燥设备，包括实验型冻干机、中试型冻干机、小型生产型及产业型冻干机；协助您选择最高性能的酶标仪；为您推荐最稳定的蠕动泵和灌装机！新默真科技，为您提供冻干机、酶标仪、蠕动泵和灌装机等产品专业的技术咨询和服务。';
		$cateList = GoodsCat::find()->where(array('pid' => 0, "status" => 1))->orderBy('sort asc')->limit(5)->asArray()->all();
		$adCate = AdCat::find()->where(array("name" => 'index', "status" => 1))->one();
		$adverList = array();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "type" => 2))->orderBy('sort asc')->limit(5)->all();
			// var_dump($adverList);exit;
		}
		// $cateIdArr = array_column($cateList, 'id');
		foreach ($cateList as $key => $cate) {
			$goodsCateArr = ArrayHelper::getSubs($cate['id']);
			$where['cat_id'] = $goodsCateArr;
			$where['status'] = 1;
			$cateList[$key]['goodsList'] = Goods::find()->where($where)->orderBy('sort asc')->limit(4)->all();
		}

		$linksList = Links::find()->where(array("status" => 1))->orderBy('sort asc')->all();

		return $this->render('index', array('cateList' => $cateList, 'linksList' => $linksList, 'adverList' => $adverList));
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
