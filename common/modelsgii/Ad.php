<?php

namespace common\modelsgii;

use Yii;

/**
 * This is the model class for table "{{%ad}}".
 *
 * @property integer $id
 * @property string $image
 * @property integer $type
 * @property string $title
 * @property string $url
 * @property integer $sort
 * @property integer $status
 */
class Ad extends \common\core\BaseActiveRecord {
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return '{{%ad}}';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[['image', 'type'], 'required'],
			[['type', 'cate_id', 'sort', 'status', 'image'], 'integer'],
			[['url'], 'string', 'max' => 255],
			[['title'], 'string', 'max' => 50],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id' => 'ID',
			'cate_id' => 'Cate_id',
			'image' => 'Image',
			'type' => 'Type',
			'title' => 'Title',
			'url' => 'Url',
			'sort' => 'Sort',
			'status' => 'Status',
		];
	}

	//显示图链接
	public function getPhoto() {
		$url = "";
		$photo = \common\modelsgii\Picture::find()->where(array("id" => $this->image))->one();
		if (is_object($photo)) {
			$url = Yii::getAlias('@storageUrl') . "/image/$photo->path";
		}
		return $url;
	}
}
