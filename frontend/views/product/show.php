<?php
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
?>
<link href="/static/css/product.css" rel="stylesheet">
<div class="blk-main">
   <div class="b plc">
    <!-- HTML -->
        <div class="p12-curmbs-1" navcrumbs="">
            <?php echo Breadcrumbs::widget(['homeLink' => [
	'label' => '首页',
	'url' => ['/'],
	'template' => "<b>您的位置:</b>&gt;{link}<span>&gt;</span>",
],
	'links' => [
		[
			'label' => '产品频道',
			'url' => ['/product'],
			'template' => "{link}<span>&gt;</span>",
		],
		[
			'label' => "{$cate['title']}",
			'url' => ['/product/cate', "id" => "{$cate['id']}"],
			'template' => "{link}",
		],
		[
			'label' => "{$goods['goods_name']}",
			'url' => ['/product/show', "id" => "{$goods['goods_id']}"],
			'template' => "{link}",
		],
	]]);
?>

        </div>
    <!-- css -->
    </div>
<div class="clear"></div>
<div class="p12-aboutinfo-1">
<div class="blk-xs fl">
    <div class="p14-left-nav-1 b">
 <div class="p14-left-nav-1-tit">
  <h3>产品中心<span><?=Url::toRoute(['/product'])?></span></h3>
 </div>
 <div class="p14-left-nav-1-nav" navvicefocus1="">

  <?php foreach ($cateList as $cateone) {?>
   <div class="p14-left-nav-1-nav-one">
    <h3>
    <a href="<?=Url::toRoute(['/product/cate', 'id' => $cateone['id']])?>" title="<?=$cateone['title']?>"><?=$cateone['title']?></a>
    </h3>
    <?php if (isset($cateone['_child'])) {?>
    <?php foreach ($cateone['_child'] as $erji) {?>
    <dl style="display:none;">
     <!-- 2级 -->
      <dt>
       <a href="<?=Url::toRoute(['/product/cate', 'id' => $erji['id']])?>" title="<?=$erji['title']?>"><?=$erji['title']?></a>
      </dt>
      <?php if (isset($erji['_child'])) {?>
      <?php foreach ($erji['_child'] as $sanji) {?>
      <dd style="display:none;">
       <!-- 3级 -->
        <p class="pl3"> <span><a href="<?=Url::toRoute(['/product/cate', 'id' => $sanji['id']])?>" title="<?=$sanji['title']?>">&gt;&gt;<?=$sanji['title']?></a></span>
        <?php if (isset($sanji['_child'])) {?>
         <!-- 4级 --> <em class="pl4">
           <?php foreach ($sanji['_child'] as $siji) {?>
           <a href="<?=Url::toRoute(['/product/cate', 'id' => $siji['id']])?>" title="<?=$siji['title']?>"><?=$siji['title']?></a>
           <?php }?>
           </em>
           <?php }?>
        </p>
      </dd>
      <?php }?>
      <?php }?>
    </dl>
    <?php }?>
    <?php }?>
   </div>
   <?php }?>

 </div>
 <div class="clear"></div>


</div>
    <div class="blk">
 <div class="p1-info-5">
  <div class="p1-titlel-1">
   <h3><span>最新资讯</span></h3>
  </div>
  <div class="p1-info-5-txt">
   <ul>

    <?php foreach ($articleList as $article) {?>
     <li>
        <a href="<?=Url::toRoute(['/article/show', 'id' => $article->id])?>" title="<?=$article->title?>"><?=$article->title?></a>
     </li>
     <?php }?>
   </ul>
  </div>
 </div>
 <!-- CSS -->

</div>
    <div>
    <div class="contact-z1">
        <p>咨询热线</p>
        <span>010-51656110</span>
    </div>

</div>
   </div>
   <div class="blk-sm fr">
    <div class="p14-showcase b">

    <div class="p14-showcase-left">
        <div class="p14-showcase-left-jt p14-showcase-left-prev"><img alt="" src="/images/p15-icon2.png"></div>
        <div class="p14-showcase-left-jt p14-showcase-left-next"><img alt="" src="/images/p15-icon3.png"></div>
        <div class="p14-showcase-left-pic">
            <ul>
                <li><img alt="<?=$goods->goods_name?>" src="<?=$goods->photo?>"></li>
            </ul>
        </div>
        <div class="p14-showcase-left-size">
            <span></span>/<em></em>
        </div>
        <div class="clear"></div>
    </div>
    <div class="p14-showcase-right">
        <div class="p14-showcase-right-tit"><span><?=$goods->goods_name?></span></div>
        <div class="p14-showcase-right-con"><?=$goods->description?></div>
        <div class="hotline">
            <span class="tel"></span>
            <div class="text">
                <p>服务热线:</p>
                <h3>010-51656110</h3>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
    <div class="clear"></div>
    <div class="p14-prodcontent-1 b">
   <div class="p14-prodcontent-1-nav">
       <ul>
           <li class="cur">产品详情</li>
       </ul>
   </div>
   <div class="clear"></div>
   <div class="p14-prodcontent-1-desc endit-desc endit-content">

           <div class="p14-prodcontent-1-text p14-prodcontent-1-cur">
                <?=$goods->content?>
            </div>


   </div>
    <div class="clear"></div>


</div>
    <div class="clear"></div>
    <div class="p14-product-3 b">
    <div class="p14-product-3-tit"><b>热品推荐</b> <span>/ Hot product </span></div>
    <div class="p14-product-3-list">
    <?php foreach ($goodsList as $goods) {?>
            <dl>
                <dt>
                    <a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>">
                        <img alt="<?=$goods->goods_name?>" src="<?=$goods->photo?>" title="<?=$goods->goods_name?>">
                    </a>
                </dt>
                <dd>
                    <h3><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>"><?=$goods->goods_name?></a></h3>
                    <div class="p14-product-3-desc">
                        <?=$goods->description?>
                    </div>
                </dd>
            </dl>
        <?php }?>



   <div class="clear"></div>
    </div>

</div>
   </div>
   <div class="clear"></div>
  </div>