<?php
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
?>
<link href="/static/css/product_cate.css" rel="stylesheet">
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
    <div class="prcList">
 <h4><span class="bt01">产品总览</span></h4>
 <div class="pc_con">
  <ul>
    <?php foreach ($cateList as $cateone) {?>
    <li>
        <a class="tt0" href="<?=Url::toRoute(['/product/cate', 'id' => $cateone['id']])?>" title="<?=$cateone['title']?>">&gt;&gt; <?=$cateone['title']?>
        </a>
        <?php if (isset($cateone['_child'])) {?>
        <p>
            <?php foreach ($cateone['_child'] as $erji) {?>
            <a href="<?=Url::toRoute(['/product/cate', 'id' => $erji['id']])?>" title="<?=$erji['title']?>"><?=$erji['title']?></a> |
                <?php if (isset($erji['_child'])) {?>
                <?php foreach ($erji['_child'] as $sanji) {?>
                    <a href="<?=Url::toRoute(['/product/cate', 'id' => $sanji['id']])?>" title="<?=$sanji['title']?>"><?=$sanji['title']?></a> |
                        <?php if (isset($sanji['_child'])) {?>
                        <?php foreach ($sanji['_child'] as $siji) {?>
                            <a href="<?=Url::toRoute(['/product/cate', 'id' => $siji['id']])?>" title="<?=$siji['title']?>"><?=$siji['title']?></a> |
                        <?php }?>
                        <?php }?>
                <?php }?>
                <?php }?>
            <?php }?>
        </p>
        <?php }?>
    </li>
    <?php }?>
  </ul>
 </div>

</div>
   </div>
   <div class="clear"></div>
  </div>