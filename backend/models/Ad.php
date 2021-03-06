<?php

namespace backend\models;

/*
 * ---------------------------------------
 * 文章模型
 * ---------------------------------------
 */
class Ad extends \common\modelsgii\Ad {

	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [
			/**
			 * 写库和更新库时，时间自动完成
			 * 注意rules验证必填时可使用AttributeBehavior行为，model的EVENT_BEFORE_VALIDATE事件
			 */
			'timestamp' => [
				'class' => 'yii\behaviors\TimestampBehavior',
				'createdAtAttribute' => 'create_time',
				'updatedAtAttribute' => 'update_time',
				'value' => time(),
			],
		];
	}

}
