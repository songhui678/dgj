<?php

namespace mobile\controllers;
use common\modelsgii\Article;
use common\modelsgii\ArticleCat;
use common\modelsgii\Goods;
use yii\data\Pagination;
use yii\web\Controller;

class ArticleController extends Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';

	public function actionIndex($id = 1) {

		$cate = ArticleCat::find()->where(array("pid" => 0, "id" => $id))->one();

		$articleCount = Article::find()->where(array("category_id" => $id, "status" => 1))->count('id');
		$pages = new Pagination(['totalCount' => $articleCount, 'pageSize' => '10']);
		$articleList = Article::find()->where(array("category_id" => $id, "status" => 1))->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();

		return $this->render('index', array('cate' => $cate, 'articleList' => $articleList, 'pages' => $pages));
	}

	public function actionShow($id) {
		$article = Article::find()->where(array("id" => $id, "status" => 1))->one();
		$cate = ArticleCat::find()->where(array("pid" => 0, "id" => $article->category_id))->one();
		//推荐资讯
		$tujianList = Article::find()->where(array("status" => 1))->orderBy('create_time desc,sort asc')->limit(3)->all();
		$goodsList = Goods::find()->where(array("cat_id" => $id, "status" => 1))->orderBy('create_time desc,sort asc')->limit(2)->all();

		return $this->render('show', array('cate' => $cate, 'article' => $article, 'tujianList' => $tujianList, 'goodsList' => $goodsList));
	}

	public function actionTest() {
		$orderList = array(
			array(
				"orderId" => "test001",
				"startTime" => "2017-11-25 21:17:22",
				"endTime" => "2017-11-25 21:27:22",
			),
			array(
				"orderId" => "test002",
				"startTime" => "2017-11-25 21:20:22",
				"endTime" => "2017-11-25 21:37:22",
			),
			array(
				"orderId" => "test003",
				"startTime" => "2017-11-25 21:03:22",
				"endTime" => "2017-11-25 21:17:22",
			),
		);

		$a = $this->msectime();
		var_dump($a);
		$orderArr = array();
		foreach ($orderList as $key => $order) {
			$orderArr[strtotime($order['startTime'])] = $order;
		}
		var_dump($orderArr);exit;
		ksort($orderArr);
		$b = $this->msectime();
		var_dump($b);
		var_dump($b - $a);

		array_multisort(array_column($orderList, "startTime"), SORT_ASC, $orderList);
		$c = $this->msectime();
		var_dump($c - $b);
		var_dump($orderList);exit;
		$count = count($orderList);
		for ($i = 0; $i < $count - 1; $i++) {
			$j = $i + 1;
			if (isset($orderList[$j])) {
				if ($orderList[$i]['endTime'] >= $orderList[$j]["startTime"]) {
					//处理后一条数据的结束时间比前一条数据结束时间小的情况
					if ($orderList[$i]['endTime'] >= $orderList[$j]["endTime"]) {
						$orderList[$j] = $orderList[$i];
					} else {
						$orderList[$j]["startTime"] = $orderList[$i]["startTime"];
					}
					$orderList[$i] = array();
				}
			} else {
				$i++;
			}
		}

		var_dump($orderList);exit;
	}

	private function msectime() {
		list($msec, $sec) = explode(' ', microtime());
		$msectime = (float) sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
		return $msectime;
	}
}
