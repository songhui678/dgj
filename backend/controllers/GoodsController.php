<?php

namespace backend\controllers;

use backend\models\Goods;
use backend\models\search\GoodsSearch;
use common\modelsgii\GoodsTag;
use common\modelsgii\Tag;
use Yii;
use yii\web\NotFoundHttpException;

/**
 * GoodsController implements the CRUD actions for Goods model.
 */
class GoodsController extends BaseController {

	/**
	 * Lists all Goods models.
	 * @return mixed
	 */
	public function actionIndex() {
		$this->setForward();
		$searchModel = new GoodsSearch();
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
			$data = Yii::$app->request->post('Goods');
			$data['goods_sn'] = date('Ymd') . substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
			$data['create_time'] = time();
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
			$data = Yii::$app->request->post('Goods');
			$data['update_time'] = time();
			/* 表单数据加载、验证、数据库操作 */
			if ($this->saveRow($model, $data)) {
				$this->insertTag($model->id, $data['tag']);
				$this->success('操作成功', $this->getForward());
			} else {
				$this->error('操作错误');
			}
		}

		/* 渲染模板 */
		return $this->render('edit', [
			'model' => $model,
		]);
	}

	/**
	 * Deletes an existing Goods model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionDelete($id) {
		$this->findModel($id)->delete();

		return $this->redirect(['index']);
	}

	/**
	 * Finds the Goods model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return Goods the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id) {
		if ($id == 0) {
			return new Goods();
		}
		if (($model = Goods::findOne($id)) !== null) {
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
		GoodsTag::deleteAll("goods_id = :goods_id", array(':goods_id' => $id));
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
		$gTag = GoodsTag::find()->where(array("tag_id" => $tagid, "goods_id" => $id))->one();
		if (empty($gTag)) {
			$tagIdmodel = new GoodsTag();
			$tagIdmodel->goods_id = $id;
			$tagIdmodel->tag_id = $tagid;
			$tagIdmodel->save(false);
		}
	}
}
