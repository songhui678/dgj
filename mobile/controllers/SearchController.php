<?php

namespace mobile\controllers;
use Yii;

class SearchController extends \yii\web\Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		$this->getView()->title = "冻干机|进口冻干机|实验室冻干机|原位冻干机|纳米材料冻干机|制药冻干机|中试冻干机|生物制品冻干机-新默真科技（北京）有限公司";
		$this->getView()->metaTags['keywords'] = '美国VirTis冻干机，冷冻干燥机，超微粉气流粉碎机，微射流均质机，加拿大Simport耗材';
		$this->getView()->metaTags['description'] = '进口冻干机 美国VirTis冻干机-新默真科技，为您提供美国SP SCIENTIFIC公司生产的最佳配置的冷冻干燥设备，包括实验型冻干机、中试型冻干机、小型生产型及产业型冻干机；协助您选择最高性能的酶标仪；为您推荐最稳定的蠕动泵和灌装机！新默真科技，为您提供冻干机、酶标仪、蠕动泵和灌装机等产品专业的技术咨询和服务。';
		$key = Yii::$app->request->queryParams('key');
		$type = Yii::$app->request->queryParams('type');
		if ($type == "all") {
			$articleModel = new ArticleSearch();
			$goodsModel = new GoodsSearch();
			$articleProvider = $articleModel->search(Yii::$app->request->queryParams);
			$goodsProvider = $goodsModel->search(Yii::$app->request->queryParams);

			$goodsCount = Goods::find()->where(array("cat_id" => $id, "status" => 1))->count('goods_id');
			$pages = new Pagination(['totalCount' => $goodsCount, 'pageSize' => '10']);
			$goodsList = Goods::find()->where(array("cat_id" => $id, "status" => 1))->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();

			return $this->render('index', [
				'articleProvider' => $articleProvider,
				'goodsProvider' => $goodsProvider,
			]);

		} elseif ($type == "product") {
			$goodsModel = new GoodsSearch();
			$goodsProvider = $goodsModel->search(Yii::$app->request->queryParams);
			return $this->render('index', [
				'goodsProvider' => $goodsProvider,
			]);

		} else {
			$articleModel = new ArticleSearch();
			$articleProvider = $articleModel->search(Yii::$app->request->queryParams);
			return $this->render('index', [
				'articleProvider' => $articleProvider,
			]);
		}
	}

}
