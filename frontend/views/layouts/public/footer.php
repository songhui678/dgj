<?php
use yii\helpers\Url;
?>
<div class="footer">
    <div class="foot">
        <div class="wrap clearfix">
            <dl><dt><a href="<?=Url::toRoute('/about')?>">关于我们</a></dt></dl>
            <dl><dt><a href="<?=Url::toRoute('/product')?>">产品中心</a></dt>
                <dd><a href="category.php?class_id=102101">超低温冷冻存储箱</a></dd>
                <dd><a href="category.php?class_id=102102">血液血细胞速冻箱</a></dd>
                <dd><a href="category.php?class_id=102103">血液冷藏箱</a></dd>
                <dd><a href="category.php?class_id=102104">医用冷藏箱</a></dd>
                <dd><a href="category.php?class_id=102105">医用冷藏冷冻箱</a></dd>
                <dd><a href="category.php?class_id=102106">医用低温箱</a></dd>
                <dd><a href="category.php?class_id=102108">液氮罐</a></dd>
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