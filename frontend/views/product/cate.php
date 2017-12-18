<?php
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\widgets\LinkPager;

?>
<link href="/static/css/product_list.css" rel="stylesheet">
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
			'label' => '产品',
			'url' => ['/product'],
			'template' => " {link}",
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
    <a href="<?=Url::toRoute(['/product/cate', 'id' => $cateone->id])?>" title="<?=$cateone->title?>"><?=$cateone->title?></a>
    </h3>
    <dl style="display:none;">
     <!-- 2级 -->
     <?php foreach ($cateone['_child'] as $erji) {?>
      <dt>
       <a href="<?=Url::toRoute(['/product/cate', 'id' => $erji->id])?>" title="<?=$erji->title?>"><?=$erji->title?></a>
      </dt>

      <dd style="display:none;">
       <!-- 3级 -->
        <p class="pl3"> <span><a href="/product/PilotXiLieJingJiXing.html" title="Pilot系列（经济型）">&gt;&gt; Pilot系列（经济型）</a></span>
         <!-- 4级 --> <em class="pl4">

           <a href="/product/PilotLXiLie.html" title="Pilot-L系列">Pilot-L系列</a>

           <a href="/product/PilotEXiLie.html" title="Pilot-E系列">Pilot-E系列</a>
           </em> 
        </p>
      </dd>
    </dl>
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
        <span>010-68173889</span>
    </div>

</div>
   </div>
   <div class="blk-sm fr">
    <!--<div nsw:blk="p14-产品广告-1"></div> -->
    <div class="p14-proindexlist-1 b">
 <div class="p14-proindexlist-1-tit">
  <h3><?=$cate->title?></h3>
 </div>
 <div class="des">

 </div>

 <div class="p14-proindexlist-1-list">
  <?php foreach ($goodsList as $goods) {?>
   <dl>
    <dt>
     <a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>"> <img alt="<?=$goods->goods_name?>" src="<?=$goods->photo?>" title="<?=$goods->goods_name?>"> </a>
    </dt>
    <dd>
     <h4><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>"><?=$goods->goods_name?></a></h4>
     <div class="p14-proindexlist-1-list-desc">
       <?=$goods->description?>
     </div>
     <div class="p14-proindexlist-1-list-deta">
      <a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>">了解详情</a>
     </div>
    </dd>
   </dl>
 <?php }?>


 </div>
 <div class="clear"></div>

</div>
    <div class="p12-pagination-1 g">
    <div class="p12-pagination-1-main">
        <?=LinkPager::widget(['pagination' => $pages]);?>
    </div>
    <div class="clear"></div>
</div>
   </div>
   <div class="clear"></div>
  </div>