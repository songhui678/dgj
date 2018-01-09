<?php

namespace common\modelsgii;

use Yii;

/**
 * This is the model class for table "yii2_page".
 *
 * @property int $id
 * @property string $name 英文标识
 * @property string $title 标题
 * @property string $content 内容
 * @property int $create_time 创建时间
 * @property int $update_time 更新时间
 * @property int $type
 * @property int $status 状态
 */
class Page extends \common\core\BaseActiveRecord {
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'yii2_page';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[['name', 'title', 'content'], 'required'],
			[['content'], 'string'],
			[['create_time', 'update_time', 'type', 'status'], 'integer'],
			[['name'], 'string', 'max' => 30],
			[['title'], 'string', 'max' => 100],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id' => 'ID',
			'name' => 'Name',
			'title' => 'Title',
			'content' => 'Content',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'type' => 'Type',
			'status' => 'Status',
		];
	}
}
