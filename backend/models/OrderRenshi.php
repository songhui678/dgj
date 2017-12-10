<?php

namespace backend\models;

/**
 * 人事订单
 */
class OrderRenshi extends \common\modelsgii\OrderRenshi {
	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [
			/* 在rules验证前，时间自动完成 */
			[
				'class' => 'yii\behaviors\AttributeBehavior',
				'attributes' => [
					static::EVENT_BEFORE_VALIDATE => 'create_time',
				],
				'value' => time(),
			],
		];
	}

}
