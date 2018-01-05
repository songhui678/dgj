<?php

use common\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model backend\models\search\AdSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
	'action' => ['index'],
	'method' => 'get',
	'options' => [
		//'class'=>"form-inline",
		'data-pjax' => true, //开启pjax搜索
	],
]);?>
<div class="row">
    <div class="col-md-2">
    <?=$form->field($model, 'cate_id')->dropDownList(
	ArrayHelper::listDataLevel(\backend\models\AdCat::find(array('status' => 1))->orderBy('sort asc')->asArray()->all(), 'id', 'title', 'id', 'pid'),
	['class' => 'form-control'])->label('广告分类');?>
    </div>
    <div class="col-md-2">
    <?=$form->field($model, 'title')->textInput()->label('标题')?>
    </div>
    <div class="col-md-2">
    <?=$form->field($model, 'type')->dropDownList(['' => '全部', 1 => 'pc', 2 => '手机'], ['class' => 'form-control'])->label('多屏');?>
    </div>

    <div class="col-md-2">
        <div class="form-group" style="margin-top: 24px;">
        <?=Html::submitButton('搜索', ['class' => 'btn btn-primary'])?>
        <?=Html::resetButton('重置', ['class' => 'btn btn-default'])?>
        </div>
    </div>
</div>
<?php ActiveForm::end();?>

