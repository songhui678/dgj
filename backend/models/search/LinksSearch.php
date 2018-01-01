<?php

namespace backend\models\search;

use backend\models\Links;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * LinksSearch represents the model behind the search form of `backend\models\Links`.
 */
class LinksSearch extends Links {
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[['id', 'status', 'sort'], 'integer'],
			[['title', 'link', 'create_time', 'update_time', 'photo'], 'safe'],
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
		$query = Links::find()->orderBy('sort asc')->asArray();
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
			'id' => $this->id,
			'status' => $this->status,
			'create_time' => $this->create_time,
			'update_time' => $this->update_time,
		]);

		$query->andFilterWhere(['like', 'title', $this->title])
			->andFilterWhere(['like', 'link', $this->link])
			->andFilterWhere(['like', 'photo', $this->photo])->orderBy('sort asc');

		return $dataProvider;
	}
}
