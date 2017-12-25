<?php

namespace common\modelsgii;

use Yii;

/**
 * This is the model class for table "yii2_ad_cat".
 *
 * @property int $id 分类ID
 * @property int $pid 上级分类ID
 * @property string $name 标志
 * @property string $title 标题
 * @property string $link 外链
 * @property string $extend 扩展设置
 * @property string $meta_title SEO的网页标题
 * @property string $keywords 关键字
 * @property string $description 描述
 * @property int $create_time 创建时间
 * @property int $update_time 更新时间
 * @property int $sort 排序（同级有效）
 * @property int $status 数据状态
 */
class AdCat extends \common\core\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_ad_cat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'create_time', 'update_time', 'sort', 'status'], 'integer'],
            [['name', 'title'], 'required'],
            [['extend'], 'string'],
            [['name'], 'string', 'max' => 30],
            [['title', 'meta_title'], 'string', 'max' => 50],
            [['link'], 'string', 'max' => 250],
            [['keywords', 'description'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => 'Pid',
            'name' => 'Name',
            'title' => 'Title',
            'link' => 'Link',
            'extend' => 'Extend',
            'meta_title' => 'Meta Title',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'sort' => 'Sort',
            'status' => 'Status',
        ];
    }
}
