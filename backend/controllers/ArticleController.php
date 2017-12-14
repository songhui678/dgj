<?php

namespace backend\controllers;

use backend\models\Article;
use backend\models\search\ArticleSearch;
use common\helpers\FuncHelper;
use common\modelsgii\ArticleTag;
use common\modelsgii\Tag;
use Yii;
use yii\web\NotFoundHttpException;

/**
 * 文章控制器
 * @author longfei <phphome@qq.com>
 */
class ArticleController extends BaseController {
	/**
	 * ---------------------------------------
	 * 列表页
	 * ---------------------------------------
	 */
	public function actionIndex() {
		/* 添加当前位置到cookie供后续跳转调用 */
		$this->setForward();

		$searchModel = new ArticleSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		return $this->render('index', [
			'searchModel' => $searchModel,
			'dataProvider' => $dataProvider,
		]);
	}

	/**
	 * ---------------------------------------
	 * 添加
	 * ---------------------------------------
	 */
	public function actionAdd() {
		$model = $this->findModel(0);

		if (Yii::$app->request->isPost) {
			$data = Yii::$app->request->post('Article');
			//$data['create_time'] = time(); // backend/models/Article->behaviors()自动完成时间更新
			/* 格式化extend值，为空或数组序列化 */
			if ($data['extend']) {
				$tmp = FuncHelper::parse_field_attr($data['extend']);
				if (is_array($tmp)) {
					$data['extend'] = serialize($tmp);
				} else {
					$data['extend'] = '';
				}
			}
			/* 表单数据加载、验证、数据库操作 */
			if ($this->saveRow($model, $data)) {
				//添加标签相关处理
				$this->insertTag($model->goods_id, $data['tag']);
				$this->success('操作成功', $this->getForward());
			} else {
				$this->error('操作错误');
			}
		}

		/* 获取模型默认数据 */
		$model->loadDefaultValues();
		/* 渲染模板 */
		return $this->render('edit', [
			'model' => $model,
		]);
	}

	/**
	 * ---------------------------------------
	 * 编辑
	 * ---------------------------------------
	 */
	public function actionEdit() {
		$id = Yii::$app->request->get('id', 0);
		$model = $this->findModel($id);

		if (Yii::$app->request->isPost) {
			$data = Yii::$app->request->post('Article');
			//$data['update_time'] = time(); // backend/models/Article->behaviors()自动完成时间更新
			/* 格式化extend值，为空或数组序列化 */
			if ($data['extend']) {
				$tmp = FuncHelper::parse_field_attr($data['extend']);
				if (is_array($tmp)) {
					$data['extend'] = serialize($tmp);
				} else {
					$data['extend'] = '';
				}
			}
			/* 表单数据加载、验证、数据库操作 */
			if ($this->saveRow($model, $data)) {
				$this->success('操作成功', $this->getForward());
			} else {
				$this->error('操作错误');
			}
		}
		/* 还原extend的数据 */
		if ($model->extend) {
			$_tmp = unserialize($model->extend);
			$_str = '';
			if ($_tmp && is_array($_tmp)) {
				foreach ($_tmp as $key => $value) {
					$_str .= $key . ':' . $value . ',';
				}
			}
			$model->extend = $_str;
		}
		/* 渲染模板 */
		return $this->render('edit', [
			'model' => $model,
		]);
	}

	/**
	 * ---------------------------------------
	 * 删除或批量删除
	 * ---------------------------------------
	 */
	public function actionDelete() {
		$model = $this->findModel(0);
		if ($this->delRow($model, 'id')) {
			$this->success('删除成功', $this->getForward());
		} else {
			$this->error('删除失败！');
		}
	}

	/**
	 * Finds the Article model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return Article the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id) {
		if ($id == 0) {
			return new Article();
		}
		if (($model = Article::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
	/**
	 * [insertTag 添加标签]
	 * @author songhui
	 * @datetime 2017-12-15T01:51:43+0800
	 * @param    [type]                   $id  [description]
	 * @param    [type]                   $tag [description]
	 * @return   [type]                        [description]
	 */
	private function insertTag($id, $tag) {
		$tagarr = array();
		$tags = str_replace("，", ",", $tag);
		$tagarr = explode(",", $tags);
		ArticleTag::deleteAll("article_id = :article_id", array(':article_id' => $id));
		foreach ($tagarr as $kt => $vt) {
			$tagm = Tag::find()->where(array("name" => $vt))->one();
			if (empty($tagm)) {
				$tagmodel = new Tag();
				$tagmodel->name = $vt;
				$tagmodel->num = 0;
				$tagmodel->save(false);
				self::insertTagId($id, $tagmodel->id);
			} else {
				self::insertTagId($id, $tagm->id);
			}
		}
	}
	/**
	 * [insertTagId 添加标签与产品对应表]
	 * @author songhui
	 * @datetime 2017-12-15T01:57:28+0800
	 * @param    [type]                   $id    [description]
	 * @param    [type]                   $tagid [description]
	 * @return   [type]                          [description]
	 */
	private function insertTagId($id, $tagid) {
		$gTag = ArticleTag::find()->where(array("tag_id" => $tagid, "article_id" => $id))->one();
		if (empty($gTag)) {
			$tagIdmodel = new ArticleTag();
			$tagIdmodel->article_id = $id;
			$tagIdmodel->tag_id = $tagid;
			$tagIdmodel->save(false);
		}
	}
}
