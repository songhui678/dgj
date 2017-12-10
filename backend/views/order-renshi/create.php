<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\OrderRenshi */

$this->title = 'Create Order Renshi';
$this->params['breadcrumbs'][] = ['label' => 'Order Renshis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-renshi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
