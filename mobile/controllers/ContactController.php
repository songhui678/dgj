<?php

namespace mobile\controllers;
use common\modelsgii\Goods;
use common\modelsgii\Page;

class ContactController extends \yii\web\Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		$this->getView()->title = "联系我们-新默真科技（北京）有限公司";
		$this->getView()->metaTags['keywords'] = '美国VirTis冻干机，冷冻干燥机，超微粉气流粉碎机，微射流均质机，加拿大Simport耗材';
		$this->getView()->metaTags['description'] = '进口冻干机 美国VirTis冻干机-新默真科技，为您提供美国SP SCIENTIFIC公司生产的最佳配置的冷冻干燥设备，包括实验型冻干机、中试型冻干机、小型生产型及产业型冻干机；协助您选择最高性能的酶标仪；为您推荐最稳定的蠕动泵和灌装机！新默真科技，为研发和中试实验室提供物料冻干机、超微粉碎机和微射流均质机的系统解决方案。';
		$content = Page::find()->where(array('name' => 'contact', 'type' => 2))->one();
		$goodsList = Goods::find()->where(array("status" => 1))->orderBy('sort asc')->limit(5)->all();
		return $this->render('index', array('content' => $content, 'goodsList' => $goodsList));

	}

	public function actionRoute() {
		$content = Page::find()->where(array('name' => 'route', 'type' => 2))->one();
		return $this->render('route', array('content' => $content));
	}
}
