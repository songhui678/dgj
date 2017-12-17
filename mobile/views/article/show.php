<?php
use yii\helpers\Url;
?>
<link href="/mobile/css/article.css" rel="stylesheet">
<!-- 文章列表2 -->
   <div class="m4-blk endit-content">
    <div class="m4-prod-content-1-con prod-content">
        <h1 class="m4-title1"><?=$article->title?></h1>
        <div class="m4-prod-content-1-con-ly">
        <span><?php echo date("Y-m-d H:i:s", $article->create_time); ?></span></div>
        <div>
<?=$article->content?>
</div>
    </div>
</div>
   <div class="m4-blk blk">
    <div class="m4-nsws-list-content-1">
        <h2 class="m4-title1">推荐资讯</h2>
        <div class="m4-nsws-list-content-1-con">
            <ul>
              <?php foreach ($tujianList as $key => $article) {?>
                  <?php if ($key == 0) {?>
                    <a href="<?=Url::toRoute(['/article/show', 'id' => $article->id])?>" title="<?=$article->title?>">
                        <p><img src="<?=$article->photo?>" title="<?=$article->title?>"></p>
                    </a>
                   <?php } else {?>
                    <a href="<?=Url::toRoute(['/article/show', 'id' => $article->id])?>" title="<?=$article->title?>">
                        <li><?=$article->title?></li>
                    </a>
              <?php }}?>

            </ul>
        </div>
    </div>
</div>
   <div class="blk m4-blk">
   <?php if (!empty($goodsList)) {?>
    <div class="m4-product-2">
        <h2 class="m4-title1">相关产品</h2>
        <div class="m4-product-2-con swiper-container">
            <ul class="swiper-wrapper">
              <?php foreach ($goodsList as $goods) {?>
                <li class="swiper-slide">
                    <a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>"><img alt="<?=$goods->goods_name?>" src="/<?=$goods->photo?>" title="<?=$goods->goods_name?>"><span><?=$goods->goods_name?></span></a>
                </li>
              <?php }?>
            </ul>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <?php }?>
</div>
  </div>