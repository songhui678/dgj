<?php

namespace mobile\controllers;
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
		$this->getView()->metaTags['description'] = '进口冻干机 美国VirTis冻干机-新默真科技，为您提供美国SP SCIENTIFIC公司生产的最佳配置的冷冻干燥设备，包括实验型冻干机、中试型冻干机、小型生产型及产业型冻干机；协助您选择最高性能的酶标仪；为您推荐最稳定的蠕动泵和灌装机！新默真科技，为研发和中试实验室提供物料冻干机、超微粉碎机和微射流均质机的系统解决方案。';
		$cate = ArticleCat::find()->where(array("pid" => 0, "id" => $id))->one();

		$articleCount = Article::find()->where(array("category_id" => $id, "status" => 1))->count('id');
		$pages = new Pagination(['totalCount' => $articleCount, 'pageSize' => '10']);
		$articleList = Article::find()->where(array("category_id" => $id, "status" => 1))->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();

		return $this->render('index', array('cate' => $cate, 'articleList' => $articleList, 'pages' => $pages));
	}

	public function actionShow($id) {

		$article = Article::find()->where(array("id" => $id, "status" => 1))->one();
		$this->getView()->title = $article->title . "-技术支持-新默真科技（北京）有限公司";
		$this->getView()->metaTags['keywords'] = '美国VirTis冻干机，冷冻干燥机，超微粉气流粉碎机，微射流均质机，加拿大Simport耗材';
		$this->getView()->metaTags['description'] = $article->description . "新默真科技，为研发和中试实验室提供物料冻干机、超微粉碎机和微射流均质机的系统解决方案。";
		// Article::updateByPk($id, array('view' => $article->view + 1));
		$article->view = $article->view + 1;
		$article->save();
		$cate = ArticleCat::find()->where(array("pid" => 0, "id" => $article->category_id))->one();

		// Article::findBySql('SELECT * FROM user')->one();  此方法是用 sql  语句查询 user 表里面的一条数据；
		$sql = "select id,title from yii2_article where id<" . $id . " and category_id=" . $article->category_id . " and status=1 order by id asc limit 1";
		$nextArticle = Article::findBySql($sql)->one();

		$sql = "select id,title from yii2_article where id>" . $id . " and category_id=" . $article->category_id . " and status=1 order by id asc limit 1";
		$beforeArticle = Article::findBysql($sql)->one();

		return $this->render('show', array('cate' => $cate, 'article' => $article, 'nextArticle' => $nextArticle, 'beforeArticle' => $beforeArticle));
	}
}
