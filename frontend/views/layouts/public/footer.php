<?php
use yii\helpers\Url;
?>
<div class="footer">
    <div class="foot">
        <div class="wrap clearfix">
            <dl><dt><a href="<?=Url::toRoute('/about')?>">关于我们</a></dt></dl>
            <dl><dt><a href="<?=Url::toRoute('/product')?>">产品中心</a></dt>
            <?php
$footList = \common\modelsgii\GoodsCat::find()->where(array("status" => 1))->limit(7)->orderBy('sort asc')->all();
foreach ($footList as $cate) {
	?>
                  <dd><a href="<?=Url::toRoute(['/product/cate', 'id' => $cate->id])?>"><?=$cate->title?></a></dd>
                <?php }?>
            </dl>
            <dl><dt><a href="<?=Url::toRoute('/support')?>">解决方案</a></dt></dl>
            <dl><dt><a href="<?=Url::toRoute('/service')?>">客服服务</a></dt></dl>
            <dl><dt><a href="<?=Url::toRoute(['/article'])?>">新闻中心</a></dt></dl>
            <dl><dt><a href="<?=Url::toRoute('/contact')?>">联系我们</a></dt></dl>
        </div>
    </div>
    <div class="wrap">
        <div class="copyright">
            <p> Copyright 2018 新默真科技（北京）有限公司 京ICP备10200644号</p>
            <p>
              地址：北京市石景山区八角西街61号
            </p>
        </div>
    </div>
</div>
</body>
</html>