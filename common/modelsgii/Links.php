<?php

namespace common\modelsgii;

use Yii;

/**
 * This is the model class for table "yii2_links".
 *
 * @property int $id ID
 * @property string $title 内容
 * @property string $link 链接
 * @property int $status 状态0回收站 1正常
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 * @property string $photo 图片地址
 */
class Links extends \common\core\BaseActiveRecord {
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'yii2_links';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[['status', 'sort', 'create_time', 'update_time'], 'integer'],
			[['title', 'link'], 'string', 'max' => 255],
			[['photo'], 'string', 'max' => 100],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id' => 'ID',
			'title' => 'Title',
			'link' => 'Link',
			'status' => 'Status',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'photo' => 'Photo',
			'sort' => 'Sort',
		];
	}
}
