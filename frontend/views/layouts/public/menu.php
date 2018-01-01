<?php
use yii\helpers\Url;
?>
    <div class="nav fl">
        <ul>
            <li><a href="<?=Url::toRoute('/')?>" >首页</a></li>
                <li><a href="<?=Url::toRoute('/about')?>" class="current">关于我们</a>
            </li>
                <li><a href="<?=Url::toRoute('/product')?>">产品中心</a>
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
                <li><a href="<?=Url::toRoute('/support')?>">解决方案</a></li>
                <li><a href="<?=Url::toRoute('/service')?>">客服服务</a></li>
                <li><a href="<?=Url::toRoute(['/article'])?>">新闻中心</a></li>
                <li><a href="<?=Url::toRoute('/contact')?>">联系我们</a></li>
        </ul>
    </div>
