<?php

namespace frontend\controllers;

use common\modelsgii\GoodsCat;
use yii;
use yii\web\Controller;

class BaseController extends Controller {

	public function init() {
		$this->setPage();
		parent::init();
	}

	public function setPage() {
		$lists = GoodsCat::find()->where(array("status" => 1))->orderBy('sort asc')->asArray()->all();
		$name = Yii::app()->controller->id;
		var_dump($name);exit;
		$adList = Ad::find()->where(array("cate_id" => 8, "status" => 1))->orderBy('sort asc')->limit(5)->all();
	}

}
