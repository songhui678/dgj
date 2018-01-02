<?php

namespace backend\controllers;

use backend\controllers\BaseController;
use backend\models\AdCat;
use backend\models\search\AdCatSearch;
use Yii;
use yii\web\NotFoundHttpException;

/**
 * AdCatController implements the CRUD actions for AdCat model.
 */
class AdCatController extends BaseController {
	/**
	 * ---------------------------------------
	 * 列表页
	 * ---------------------------------------
	 */
	public function actionIndex() {
		/* 添加当前位置到cookie供后续跳转调用 */
		$this->setForward();
		//var_dump(Category::getParents(2));
		$searchModel = new AdCatSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		//\yii\helpers\VarDumper::dump($dataProvider->allModels);exit;
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

			$data = Yii::$app->request->post('AdCat');
			//$data['create_time'] = time();
			/* 格式化extend值，为空或数组序列化 */
			// if ($data['extend']) {
			//     $tmp = FuncHelper::parse_field_attr($data['extend']);
			//     if (is_array($tmp)) {
			//         $data['extend'] = serialize($tmp);
			//     } else {
			//         $data['extend'] = '';
			//     }
			// }
			/* 表单数据加载、验证、数据库操作 */
			if ($this->saveRow($model, $data)) {
				$this->success('操作成功', $this->getForward());
			} else {
				$this->error('操作错误');
			}
		}

		/* 获取模型默认数据 */
		$model->loadDefaultValues();
		$model->pid = Yii::$app->request->get('pid', 0);
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
			$data = Yii::$app->request->post('AdCat');
			//$data['update_time'] = time();
			/* 格式化extend值，为空或数组序列化 */
			// if ($data['extend']) {
			//  $tmp = FuncHelper::parse_field_attr($data['extend']);
			//  if (is_array($tmp)) {
			//      $data['extend'] = serialize($tmp);
			//  } else {
			//      $data['extend'] = '';
			//  }
			// }
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
	 * ---------------------------------------
	 * 获取栏目数据tree结构
	 * ---------------------------------------
	 */
	public function actionTree() {
		$lists = AdCat::find()->orderBy('sort asc')->asArray()->all();
		$lists = ArrayHelper::list_to_tree($lists, 'id', 'pid');
		$lists = ArrayHelper::jstree($lists);
		echo json_encode($lists);
	}

	/**
	 * Finds the Article model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return ArticleCat the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id) {
		if ($id == 0) {
			return new AdCat();
		}
		if (($model = AdCat::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}

}