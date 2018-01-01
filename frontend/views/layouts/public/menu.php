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
                        <dt><a href="category.php?class_id=102101">超低温冷冻存储箱</a></dt>
                        <dt>|<a href="category.php?class_id=102102">血液血细胞速冻箱</a></dt>

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
