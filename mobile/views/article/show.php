<?php
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
?>
<link href="/mobile/css/article.css" rel="stylesheet">
<div>
        <div class="m4-title_nav">
            <div class="m4-t-sear1"></div>
            <a class="m4-goback" href="javascript:history.back(-1);">返回上一页</a>
            <a href="<?=Url::toRoute(['/article/index', 'id' => $cate->id])?>" id="m4-topclick"></a>
            <h2>{$cate['title']}</h2>
        </div>
    </div>
      <!-- END FOOTER -->
    <?php $this->beginContent('@app/views/layouts/public/setting.php')?>
    <?php $this->endContent()?>
</div>
   <!-- 面包屑 -->
   <div class="m4-blk">
    <div class="m4-crumbs-1">
<?php echo Breadcrumbs::widget(['homeLink' => [
	'label' => '首页',
	'url' => ['/'],
	'template' => "<p>{link}<span>&gt;</span>",
],
	'links' => [
		[
			'label' => '资讯频道',
			'url' => ['/article'],
			'template' => "{link}<span>&gt;</span>",
		],
		[
			'label' => "{$cate['title']}",
			'url' => ['/article/index', "id" => "{$cate['id']}"],
			'template' => "{link}</p>",
		],

	]]);
?>


    </div>
</div>
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