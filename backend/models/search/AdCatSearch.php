<?php

namespace backend\models\search;

use common\helpers\ArrayHelper;
use common\modelsgii\AdCat;
use yii\base\Model;
use yii\data\ArrayDataProvider;

/**
 * ArticleCatSearch represents the model behind the search form about `common\models\ArticleCat`.
 */
class AdCatSearch extends AdCat {
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[['id', 'pid', 'create_time', 'update_time', 'sort', 'status'], 'integer'],
			[['name', 'title', 'link', 'extend', 'meta_title', 'keywords', 'description'], 'safe'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function scenarios() {
		// bypass scenarios() implementation in the parent class
		return Model::scenarios();
	}

	/**
	 * Creates data provider instance with search query applied
	 *
	 * @param array $params
	 *
	 * @return ArrayDataProvider
	 */
	public function search($params) {
		$query = AdCat::find();

		$lists = $query->orderBy('sort asc')->asArray()->all();

		// $lists = ArrayHelper::list_to_tree($lists, 'id', 'pid');
		$lists = ArrayHelper::format_tree($lists, 'title');

		$dataProvider = new ArrayDataProvider([
			'allModels' => $lists,
			'pagination' => [
				'pageSize' => 30,
			],
		]);

		return $dataProvider;
	}
}
