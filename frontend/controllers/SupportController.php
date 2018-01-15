<?php

namespace frontend\controllers;
use common\modelsgii\Ad;
use common\modelsgii\AdCat;
use common\modelsgii\Page;

class SupportController extends \yii\web\Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		$this->getView()->title = "解决方案-新默真科技（北京）有限公司";
		$this->getView()->metaTags['keywords'] = '美国VirTis冻干机，冷冻干燥机，超微粉气流粉碎机，微射流均质机，加拿大Simport耗材';
		$this->getView()->metaTags['description'] = '进口冻干机 美国VirTis冻干机-新默真科技，为您提供美国SP SCIENTIFIC公司生产的最佳配置的冷冻干燥设备，包括实验型冻干机、中试型冻干机、小型生产型及产业型冻干机；协助您选择最高性能的酶标仪；为您推荐最稳定的蠕动泵和灌装机！新默真科技，为研发和中试实验室提供物料冻干机、超微粉碎机和微射流均质机的系统解决方案。';
		$adCate = AdCat::find()->where(array("name" => 'support', "status" => 1))->one();
		$adverList = array();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "type" => 1))->orderBy('sort asc')->limit(5)->all();
		}
		$content = Page::find()->where(array('name' => 'support', 'type' => 1))->one();
		return $this->render('index', array('content' => $content, 'adverList' => $adverList));
	}

}
