<?php

namespace mobile\controllers;
use common\modelsgii\AdCat;
use common\modelsgii\Article;
use common\modelsgii\ArticleCat;
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
		// Article::updateByPk($id, array('view' => $article->view + 1));
		$article->view = $article->view + 1;
		$article->save();
		$cate = ArticleCat::find()->where(array("pid" => 0, "id" => $article->category_id))->one();

		// Article::findBySql('SELECT * FROM user')->one();  此方法是用 sql  语句查询 user 表里面的一条数据；
		$sql = "select id,title from yii2_article where id<" . $id . " and category_id=" . $article->category_id . " and status=1 order by id asc limit 1";
		$nextArticle = Article::findBySql($sql)->one();

		$sql = "select id,title from yii2_article where id>" . $id . " and category_id=" . $article->category_id . " and status=1 order by id asc limit 1";
		$beforeArticle = Article::findBysql($sql)->one();
		$adCate = AdCat::find()->where(array("name" => 'article', "status" => 1))->one();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "status" => 1))->orderBy('sort asc')->limit(5)->all();
			// var_dump($adverList);exit;
		}
		return $this->render('show', array('cate' => $cate, 'article' => $article, 'nextArticle' => $nextArticle, 'beforeArticle' => $beforeArticle));
	}

	public function actionTest() {
		$arr = array(1, 2, 3);
		foreach ($arr as &$val) {
			$val;
		}
		foreach ($arr as $val) {
			echo $val;
		}
		exit;
		// $orderList = array(
		// 	array(
		// 		"orderId" => "test001",
		// 		"startTime" => "2017-11-25 21:17:22",
		// 		"endTime" => "2017-11-25 21:27:22",
		// 	),
		// 	array(
		// 		"orderId" => "test002",
		// 		"startTime" => "2017-11-25 21:20:22",
		// 		"endTime" => "2017-11-25 21:37:22",
		// 	),
		// 	array(
		// 		"orderId" => "test003",
		// 		"startTime" => "2017-11-25 21:03:22",
		// 		"endTime" => "2017-11-25 21:17:22",
		// 	),
		// );
		$orderList = array();
		for ($i = 0; $i < 50000; $i++) {
			$orderList[] = array(
				"orderId" => "test003",
				// "startTime" => "2017-11-25 21:03:22",
				"startTime" => date('Y-m-d H:i:s', time() + $i),
				"endTime" => "2017-11-25 21:17:22",
			);
		}

		$a = $this->msectime();
		var_dump($a);

		array_multisort(array_column($orderList, "startTime"), SORT_ASC, $orderList);

		$b = $this->msectime();
		var_dump($b);
		var_dump($b - $a);
		$orderArr = array();
		foreach ($orderList as $key => $order) {
			// $order['startTime'] = strtotime($order['startTime']);
			// $order['endTime'] = strtotime($order['endTime']);
			$orderArr[strtotime($order['startTime'])] = $order;
		}
		ksort($orderList);

		$c = $this->msectime();
		var_dump($c);
		var_dump($c - $b);
		exit;
		// var_dump($orderList);exit;
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
