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

    <?=$form->field($model, 'cat_id')->dropDownList(
	ArrayHelper::listDataLevel(\backend\models\GoodsCat::find(array('status' => 1))->asArray()->all(), 'id', 'title', 'id', 'pid'),
	['class' => 'form-control'])->label('产品分类');?>

    </div>
    <div class="col-md-2">
    <?=$form->field($model, 'goods_sn')->textInput()->label('产品编号')?>
    </div>
    <div class="col-md-2">
    <?=$form->field($model, 'goods_name')->textInput()->label('产品名称')?>
    </div>
    <div class="col-md-2">
    <?=$form->field($model, 'status')->dropDownList(['' => '全部', 0 => '隐藏', 1 => '正常'], ['class' => 'form-control'])->label('状态');?>
    </div>

    <div class="col-md-2">
        <div class="form-group" style="margin-top: 24px;">
        <?=Html::submitButton('搜索', ['class' => 'btn btn-primary'])?>
        <?=Html::resetButton('重置', ['class' => 'btn btn-default'])?>
        </div>
    </div>
</div>
<?php ActiveForm::end();?>

