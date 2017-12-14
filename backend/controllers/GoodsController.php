<?php

namespace backend\controllers;

use backend\controllers\BaseController;
use backend\models\search\GoodsSearch;
use common\modelsgii\Goods;
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

			/* 表单数据加载、验证、数据库操作 */
			if ($this->saveRow($model, $data)) {
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

			/* 表单数据加载、验证、数据库操作 */
			if ($this->saveRow($model, $data)) {
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
}
