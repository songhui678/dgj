<?php
use yii\helpers\Url;
?>
    <?php if (Yii::$app->controller->id == "") {?>class="current"<?php }?>
    <div class="nav fl">
        <ul>
            <li><a href="<?=Url::toRoute('/')?>" <?php if (Yii::$app->controller->id == "index") {?>class="current"<?php }?>>首页</a></li>
            <li><a href="<?=Url::toRoute('/about')?>" <?php if (Yii::$app->controller->id == "about") {?>class="current"<?php }?>>关于我们</a>
            </li>
                <li><a href="<?=Url::toRoute('/product')?>" <?php if (Yii::$app->controller->id == "product") {?>class="current"<?php }?>>产品中心</a>
                <div class="subNavBox">
                    <div class="subNav subNav_1 clearfix">
                    <dl>
<?php
$footList = \common\modelsgii\GoodsCat::find()->where(array("status" => 1))->orderBy('sort asc')->all();
foreach ($footList as $key => $cate) {
	if ($key == 0) {
		?>
                        <dt><a href="<?=Url::toRoute(['/product/cate', 'id' => $cate->id])?>"><?=$cate->title?></a></dt>
<?php } else {?>

                        <dt>|<a href="<?=Url::toRoute(['/product/cate', 'id' => $cate->id])?>"><?=$cate->title?></a></dt>
<?php }}?>

                    </dl>
                    </div>
                </div>
            </li>
                <li><a href="<?=Url::toRoute('/support')?>" <?php if (Yii::$app->controller->id == "support") {?>class="current"<?php }?>>解决方案</a></li>
                <li><a href="<?=Url::toRoute('/service')?>" <?php if (Yii::$app->controller->id == "service") {?>class="current"<?php }?>>客服服务</a></li>
                <li><a href="<?=Url::toRoute(['/article'])?>" <?php if (Yii::$app->controller->id == "article") {?>class="current"<?php }?>>新闻中心</a></li>
                <li><a href="<?=Url::toRoute('/contact')?>" <?php if (Yii::$app->controller->id == "contact") {?>class="current"<?php }?>>联系我们</a></li>
        </ul>
    </div>
