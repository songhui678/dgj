<?php

namespace common\modelsgii;

/**
 * This is the model class for table "{{%goods}}".
 *
 * @property integer $goods_id
 * @property integer $cat_id
 * @property string $goods_sn
 * @property string $goods_name
 * @property integer $goods_number
 * @property string $market_price
 * @property string $shop_price
 * @property integer $goods_cover
 * @property string $goods_album
 * @property string $keywords
 * @property string $description
 * @property string $content
 * @property string $extend
 * @property integer $warn_number
 * @property integer $is_promote
 * @property string $promote_price
 * @property integer $promote_start_date
 * @property integer $promote_end_date
 * @property integer $is_real
 * @property integer $integral
 * @property integer $give_integral
 * @property integer $view
 * @property integer $up
 * @property integer $down
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $sort
 * @property integer $status
 */
class Goods extends \common\core\BaseActiveRecord {
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return '{{%goods}}';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[['cat_id', 'goods_cover', 'view', 'up', 'down', 'create_time', 'update_time', 'sort', 'status'], 'integer'],
			[['goods_cover', 'content'], 'required'],
			[['content'], 'string'],
			[['goods_sn'], 'string', 'max' => 60],
			[['goods_name'], 'string', 'max' => 120],
			[['keywords', 'description', 'tag'], 'string', 'max' => 255],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'goods_id' => 'Goods ID',
			'cat_id' => 'Cat ID',
			'goods_sn' => 'Goods Sn',
			'goods_name' => 'Goods Name',
			'goods_cover' => 'Goods Cover',

			'keywords' => 'Keywords',
			'description' => 'Description',
			'content' => 'Content',
			'tag' => 'Tag',
			'view' => 'View',
			'up' => 'Up',
			'down' => 'Down',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'sort' => 'Sort',
			'status' => 'Status',
		];
	}
	//显示推广图链接
	public function getPhoto() {
		$url = "";
		$photo = \common\modelsgii\Picture::find()->where(array("id" => $this->goods_cover))->one();
		if (is_object($photo)) {
			$url = "http://image.dgj.com/image/$photo->path";
		}
		return $url;
	}
}
