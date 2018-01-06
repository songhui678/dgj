<?php
use common\helpers\StringHelper;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<div class="iBanner">
    <div class="bd">
        <?php foreach ($adverList as $adver) {?>
            <a href="<?=$adver->url?>" target="_blank" title="<?=$adver->title?>"><img src="<?=$adver->photo?>" alt="<?=$adver->title?>" width="1920" height="258" ></a>
        <?php }?>
    </div>
</div>

<div class="menuwrap">
  <div class="menu wrap pro-tit">
    <dl class="clearfix">
      <?php foreach ($cateList as $cate) {?>
        <dt>
          <a href="<?=Url::toRoute(['/product/cate', 'id' => $cate['id']])?>" title="<?=$cate['title']?>" class="current"><i class="i1"></i><?=$cate['title']?></a>
        </dt>
      <?php }?>
    </dl>
  </div>
</div>
<div class="third_menu">
  <div class="s_menu">
      <ul class="clearfix">
        <?php foreach ($cateTree as $cate) {?>
          <?php if (isset($cate['_child'])) {?>
          <?php foreach ($cate['_child'] as $key => $erji) {?>
          <li><?php if ($key > 0) {?>|<?php }?> <a href="<?=Url::toRoute(['/product/cate', 'id' => $erji['id']])?>" title="<?=$erji['title']?>"  class='current'><?=$erji['title']?></a></li>
        <?php }}}?>
      </ul>
  </div>
</div>


<div class="container hhh">
  <div class="wrap clearfix">
    <div class="main">
                  <div class="pro-item-wrap clearfix">


          <?php foreach ($goodsList as $goods) {?>
                <div class="pro-item ">
                  <div class="pic">
                        <a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>" target="_blank"><img src="<?=$goods->photo?>" width="288" height="204" alt="<?=$goods->goods_name?>" /></a>
                        <div class="name"><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>" target="_blank"><?=$goods->goods_name?></a></div>
                  </div>
                  <dl>
                      <dt><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>"><?=$goods->goods_name?></a></dt>
                      <dd class="txt">
                        <?php echo StringHelper::truncate_utf8_string($goods->description, 55); ?>
                      </dd>
                      <!--<dd class="wendu">存储温度（℃）：</dd>-->
                  </dl>
              </div>
          <?php }?>


                <div class="clear"></div>
      </div>
      <div class="page">
      <?=LinkPager::widget([
	'pagination' => $pages,
	'firstPageLabel' => '首页',
	'lastPageLabel' => '尾页',
	'maxButtonCount' => 5,
]);?>
</div>

          </div>
  </div>
</div>
