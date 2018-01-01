<?php

namespace backend\controllers;

use backend\models\Links;
use backend\models\search\LinksSearch;
use Yii;
use yii\web\NotFoundHttpException;

/**
 * 文章控制器
 * @author longfei <phphome@qq.com>
 */
class LinksController extends BaseController {
	/**
	 * ---------------------------------------
	 * 列表页
	 * ---------------------------------------
	 */
	public function actionIndex() {
		/* 添加当前位置到cookie供后续跳转调用 */
		$this->setForward();

		$searchModel = new LinksSearch();
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
			$data = Yii::$app->request->post('Links');
			$data['create_time'] = time();

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
			$data = Yii::$app->request->post('Links');
			$data['update_time'] = time();
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
			return new Links();
		}
		if (($model = Links::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}

}
