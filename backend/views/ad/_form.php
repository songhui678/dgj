<?php
use backend\models\AdCat;
use common\core\ActiveForm;
use common\helpers\ArrayHelper;
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model backend\models\Ad */
/* @var $form common\core\ActiveForm */
?>

<?php $form = ActiveForm::begin([
	'options' => [
		'class' => "form-aaa ",
		'enctype' => "multipart/form-data",
	],
]);?>
<?=$form->field($model, 'cate_id')->selectList(
	ArrayHelper::listDataLevel(\backend\models\AdCat::find()->orderBy('sort asc')->asArray()->all(), 'id', 'title', 'id', 'pid'),
	['class' => 'form-control c-md-2'])->label('分类')->hint('英文标识');?>

<?=$form->field($model, 'type')->selectList(
	[1 => 'PC', 2 => '手机'],
	['class' => 'form-control c-md-2'])->label('多屏')?>

<?=$form->field($model, 'title')->textInput()->label('广告标题');?>

<!-- 单图 -->
<?=$form->field($model, 'image')->widget('\common\widgets\images\Images', [
	//'type' => \backend\widgets\images\Images::TYPE_IMAGE, // 单图
	'saveDB' => 1, //图片是否保存到picture表，默认不保存
], ['class' => 'c-md-12'])->label('封面图片')->hint('图片尺寸请参考http://www.zkmeiling.com');?>

<?=$form->field($model, 'url')->textInput(['class' => 'form-control c-md-5'])->label('外链')->hint('外链地址必须带http://')?>

<?=$form->field($model, 'sort')->textInput(['class' => 'form-control c-md-1'])->label('排序值')->hint('排序值越小越前')?>

<?=$form->field($model, 'status')->radioList(['1' => '正常', '0' => '隐藏'])->label('状态')?>

<div class="form-actions">
    <?=Html::submitButton('<i class="icon-ok"></i> 确定', ['class' => 'btn blue ajax-post', 'target-form' => 'form-aaa'])?>
    <?=Html::button('取消', ['class' => 'btn'])?>
</div>

<?php ActiveForm::end();?>
