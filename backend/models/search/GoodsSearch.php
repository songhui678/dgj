<?php

namespace backend\models\search;

use common\modelsgii\Goods;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * GoodsSearch represents the model behind the search form of `\common\modelsgii\Goods`.
 */
class GoodsSearch extends Goods {
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[['goods_id', 'cat_id', 'goods_cover', 'view', 'up', 'down', 'create_time', 'update_time', 'sort', 'status'], 'integer'],
			[['goods_sn', 'goods_name', 'keywords', 'description', 'content', 'tag'], 'safe'],
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
	 * @return ActiveDataProvider
	 */
	public function search($params) {
		$query = Goods::find();

		// add conditions that should always apply here

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		$this->load($params);

		if (!$this->validate()) {
			// uncomment the following line if you do not want to return any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}

		// grid filtering conditions
		$query->andFilterWhere([
			'goods_id' => $this->goods_id,
			'cat_id' => $this->cat_id,
			'goods_cover' => $this->goods_cover,
			'view' => $this->view,
			'up' => $this->up,
			'down' => $this->down,
			'create_time' => $this->create_time,
			'update_time' => $this->update_time,
			'sort' => $this->sort,
			'status' => $this->status,
		]);

		$query->andFilterWhere(['like', 'goods_sn', $this->goods_sn])
			->andFilterWhere(['like', 'goods_name', $this->goods_name])
			->andFilterWhere(['like', 'keywords', $this->keywords])
			->andFilterWhere(['like', 'description', $this->description])
			->andFilterWhere(['like', 'content', $this->content])
			->andFilterWhere(['like', 'tag', $this->tag]);

		return $dataProvider;
	}
}
