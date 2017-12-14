<?php

use common\core\ActiveForm;
use common\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Article */
/* @var $form common\core\ActiveForm */
?>

<?php $form = ActiveForm::begin([
	'options' => [
		'class' => "form-aaa ",
		'enctype' => "multipart/form-data",
	],
]);?>
<?=$form->field($model, 'cat_id')->selectList(
	ArrayHelper::listDataLevel(\backend\models\GoodsCat::find()->asArray()->all(), 'id', 'title', 'id', 'pid'),
	['class' => 'form-control c-md-2'])->label('分类')->hint('英文标识');?>

<?=$form->field($model, 'goods_name')->textInput(['class' => 'form-control c-md-5'])->label('产品名称')->hint('英文标识，只允许含有:英文、数字和中划线');?>


<!-- 单图 -->
<?=$form->field($model, 'goods_cover')->widget('\common\widgets\images\Images', [
	//'type' => \backend\widgets\images\Images::TYPE_IMAGE, // 单图
	'saveDB' => 1, //图片是否保存到picture表，默认不保存
], ['class' => 'c-md-12'])->label('产品封面')->hint('单图图片尺寸为：300*300');?>

<?=$form->field($model, 'keywords')->textInput(['class' => 'form-control c-md-5'])->label('产品关键字')->hint('产品关键字');?>
<?=$form->field($model, 'description')->textarea(['class' => 'form-control c-md-4', 'rows' => 3])->label('产品描述')->hint('产品描述')?>

<?=$form->field($model, 'content')->widget('\kucha\ueditor\UEditor', [
	'clientOptions' => [
		'serverUrl' => Url::to(['/public/ueditor']), //确保serverUrl正确指向后端地址
		'lang' => 'zh-cn', //中文为 zh-cn
		'initialFrameWidth' => '100%',
		'initialFrameHeight' => '400',
		//定制菜单，参考http://fex.baidu.com/ueditor/#start-toolbar
		'toolbars' => [
			[
				'fullscreen', 'source', 'undo', 'redo', '|',
				'fontsize',
				'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'removeformat',
				'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|',
				'forecolor', 'backcolor', '|',
				'lineheight', '|',
				'indent', '|',
			],
			['preview', 'simpleupload', 'insertimage', 'link', 'emotion', 'map', 'insertvideo', 'insertcode'],
		],
	],
], ['class' => 'c-md-7'])->label('产品内容');?>

<?=$form->field($model, 'tag')->textInput(['class' => 'form-control c-md-5'])->label('产品标签')->hint('多个标签请用逗号分开');?>


<?=$form->field($model, 'sort')->textInput(['class' => 'form-control c-md-1'])->label('排序值')->hint('排序值越小越前')?>

<?=$form->field($model, 'status')->radioList(['1' => '正常', '0' => '隐藏'])->label('状态')?>

<div class="form-actions">
    <?=Html::submitButton('<i class="icon-ok"></i> 确定', ['class' => 'btn blue ajax-post', 'target-form' => 'form-aaa'])?>
    <?=Html::button('取消', ['class' => 'btn'])?>
</div>

<?php ActiveForm::end();?>

