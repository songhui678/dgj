<?php

use common\core\ActiveForm;
use yii\helpers\Html;

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


<?=$form->field($model, 'title')->textInput(['class' => 'form-control c-md-5'])->label('链接标题')->hint('链接标题');?>


<?=$form->field($model, 'link')->textarea(['class' => 'form-control c-md-4', 'rows' => 3])->label('链接地址')->hint('外链地址必须带http://')?>

<?=$form->field($model, 'sort')->textInput(['class' => 'form-control c-md-1'])->label('排序值')->hint('排序值越小越前')?>
<?=$form->field($model, 'status')->radioList(['1' => '正常', '0' => '隐藏'])->label('状态')?>

<div class="form-actions">
    <?=Html::submitButton('<i class="icon-ok"></i> 确定', ['class' => 'btn blue ajax-post', 'target-form' => 'form-aaa'])?>
    <?=Html::button('取消', ['class' => 'btn'])?>
</div>

<?php ActiveForm::end();?>

