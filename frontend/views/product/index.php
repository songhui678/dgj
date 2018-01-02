<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
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
        <?php foreach ($cateList as $cate) {?>
          <?php if (isset($cate['_child'])) {?>
          <?php foreach ($cate['_child'] as $key=>$erji) {?>
          <li><?php if($key>0){?>|<?}?> <a href="<?=Url::toRoute(['/product/cate', 'id' => $erji['id']])?>" title="<?=$cate['title']?>"  class='current'><?=$cate['title']?></a></li>
        <?php }}}?>
      </ul>
  </div>
</div>


<div class="container hhh">
  <div class="wrap clearfix">
    <div class="main">
                  <div class="pro-item-wrap clearfix">

                <div class="pro-item noMg">
                  <div class="pic">
                                    <a href="pdisplay.php?id=318" target="_blank"><img src="/upload/2017-07/150035803642762200.jpg" width="288" height="204" alt="超低温冷冻储存箱DW-HL528" /></a>
                        <div class="name"><a href="pdisplay.php?id=318" target="_blank">超低温冷冻储存箱DW-HL528</a></div>
                  </div>
                  <dl>
                      <dt><a href="pdisplay.php?id=318">超低温冷冻储存箱DW-HL528</a></dt>
                      <dd class="txt">

</dd>
                      <!--<dd class="wendu">存储温度（℃）：</dd>-->
                  </dl>
              </div>
          <?php foreach ($goodsList as $goods) {?>
                <div class="pro-item ">
                  <div class="pic">
                        <a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>" target="_blank"><img src="<?=$goods->photo?>" width="288" height="204" alt="<?=$goods->goods_name?>" /></a>
                        <div class="name"><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>" target="_blank"><?=$goods->goods_name?></a></div>
                  </div>
                  <dl>
                      <dt><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>"><?=$goods->goods_name?></a></dt>
                      <dd class="txt">
                        <?=$goods->description?>
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
