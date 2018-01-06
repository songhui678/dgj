<?php

namespace frontend\controllers;
use common\modelsgii\Ad;
use common\modelsgii\AdCat;
use common\modelsgii\Article;
use common\modelsgii\ArticleCat;
use yii\data\Pagination;
use yii\web\Controller;

class ServiceController extends \yii\web\Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		$id = 2;
		$this->getView()->title = "技术支持-新默真科技（北京）有限公司";
		$this->getView()->metaTags['keywords'] = '美国VirTis冻干机，冷冻干燥机，超微粉气流粉碎机，微射流均质机，加拿大Simport耗材';
		$this->getView()->metaTags['description'] = '进口冻干机 美国VirTis冻干机-新默真科技，为您提供美国SP SCIENTIFIC公司生产的最佳配置的冷冻干燥设备，包括实验型冻干机、中试型冻干机、小型生产型及产业型冻干机；协助您选择最高性能的酶标仪；为您推荐最稳定的蠕动泵和灌装机！新默真科技，为您提供冻干机、酶标仪、蠕动泵和灌装机等产品专业的技术咨询和服务。';
		$cate = ArticleCat::find()->where(array("pid" => 0, "id" => $id))->one();
		$cateList = ArticleCat::find()->where(array("pid" => 0))->orderBy('sort asc')->all();
		$articleCount = Article::find()->where(array("category_id" => $id, "status" => 1))->count('id');
		$pages = new Pagination(['totalCount' => $articleCount, 'pageSize' => '10']);
		$articleList = Article::find()->where(array("category_id" => $id, "status" => 1))->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();
		$toutiaoArticle = Article::find()->where(array("category_id" => $id, "status" => 2))->orderBy('create_time desc')->one();
		$adCate = AdCat::find()->where(array("name" => 'service', "status" => 1))->one();
		$adverList = array();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "type" => 1))->orderBy('sort asc')->limit(5)->all();
			// var_dump($adverList);exit;
		}
		return $this->render('index', array('cateList' => $cateList, 'cate' => $cate, 'articleList' => $articleList, 'pages' => $pages, "toutiaoArticle" => $toutiaoArticle, 'adverList' => $adverList));

	}

}
