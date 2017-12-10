<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "yii2_company".
 *
 * @property int $id
 * @property string $name 公司全称
 * @property string $short_name 公司简称
 * @property string $email 公司邮箱
 * @property string $address 公司地址
 * @property string $phone 公司电话
 * @property int $scale 公司规模
 * @property string $logo
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class Company extends \common\modelsgii\Company {

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
