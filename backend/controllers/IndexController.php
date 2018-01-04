<?php

namespace backend\controllers;
use common\modelsgii\Article;
use common\modelsgii\Goods;

/**
 * 后台首页控制器
 * @author longfei <phphome@qq.com>
 */
class IndexController extends BaseController {
	public function actionIndex() {
		$goodsView = Goods::find()->select(["sum(view) as view"])->where(['status' => 1])->asArray()->one();
		$articleView = Article::find()->select(["sum(view) as view"])->where(array("status" => 1))->asArray()->one();

		return $this->render('index', array("goodsView" => $goodsView, "articleView" => $articleView));
	}

}
