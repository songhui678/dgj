<?php

namespace common\modelsgii;
use common\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%goods_cat}}".
 *
 * @property integer $id
 * @property integer $pid
 * @property string $name
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $sort
 * @property integer $status
 */
class GoodsCat extends \common\core\BaseActiveRecord {
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return '{{%goods_cat}}';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[['pid', 'create_time', 'update_time', 'sort', 'status'], 'integer'],
			[['name', 'title'], 'required'],
			// [['extend'], 'string'],
			[['name'], 'string', 'max' => 30],
			[['title', 'meta_title'], 'string', 'max' => 50],
			[['link', 'image'], 'string', 'max' => 250],
			[['keywords', 'description'], 'string', 'max' => 255],
			[['name'], 'unique'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id' => 'ID',
			'pid' => 'Pid',
			'name' => 'Name',
			'title' => 'Title',
			'link' => 'Link',
			'extend' => 'Extend',
			'image' => 'Image',
			'meta_title' => 'Meta Title',
			'keywords' => 'Keywords',
			'description' => 'Description',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'sort' => 'Sort',
			'status' => 'Status',
		];
	}

	/**
	 * 获取所有的分类
	 */
	public function getCategories() {
		$data = self::find()->all();
		$data = ArrayHelper::toArray($data);
		return $data;
	}

	/**
	 *遍历出各个子类 获得树状结构的数组
	 */
	public static function getTree($data, $pid = 0, $lev = 1) {
		$tree = [];
		foreach ($data as $value) {
			if ($value['pid'] == $pid) {
				$value['title'] = str_repeat('|___', $lev) . $value['title'];
				$tree[] = $value;
				$tree = array_merge($tree, self::getTree($data, $value['id'], $lev + 1));
			}
		}
		return $tree;
	}

	/**
	 * 得到相应  id  对应的  分类名  数组
	 */
	public function getOptions() {
		$data = $this->getCategories();
		$tree = $this->getTree($data);
		$list = ['添加分类'];
		foreach ($tree as $value) {
			$list[$value['id']] = $value['title'];
		}
		return $list;
	}
}
