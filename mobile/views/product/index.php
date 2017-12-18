<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<link href="/mobile/css/product_index.css" rel="stylesheet">
   <!-- 面包屑 -->
   <div class="m4-blk">
    <div class="m4-crumbs-1">
        <p><a href="/" title="首页">首页</a>
                    &gt; 公司信息
        </p>
    </div>
</div>
   <!-- 文章列表2 -->
   <div class="m4-blk blk">
    <div class="m4-prod-list-content-1">

        <div class="m4-prod-list-content-1-con">
            <ul>
                <?php foreach ($goodsList as $goods) {?>
                    <a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>">
                        <li class="fl"><img alt="<?=$goods->goods_name?>" src="<?=$goods->photo?>" title="<?=$goods->goods_name?>"><span><?=$goods->goods_name?></span></li>
                    </a>
                <?php }?>
            </ul>

        </div>
        <div class="m4-page">
            <?=LinkPager::widget(['pagination' => $pages]);?></a>
        </div>
    </div>
</div>
  </div>