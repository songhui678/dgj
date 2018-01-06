<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<link id="headercss" href="/static/newcss/mheader.css" type="text/css" rel="stylesheet" />
<nav class="yk-nav yk-pro" id="mheader_nav">
    <div class="yk-nav-box">
        <div class="yk-nav-list" id="mheader_navbox">
            <ul class="yk-nav-pills">
              <?php foreach ($cateList as $key => $cate) {?>
                <li class="on"><a href="<?=Url::toRoute(['/product/cate', 'id' => $cate['id']])?>" title="<?=$cate['title']?>" class="current"><i class="i<?=$key?>"></i><?=$cate['title']?></a>
                </li>
              <?php }?>


            </ul>
        </div>
    </div>
</nav>

  <div class="dsfg" id="sd">
    <div class="dsffs">
        <?php foreach ($cateList as $cate) {?>

          <?php if (isset($cate['_child'])) {?>
          <?php foreach ($cate['_child'] as $key => $erji) {?>
              <a  class='on'  href="<?=Url::toRoute(['/product/cate', 'id' => $erji['id']])?>" title="<?=$erji['title']?>"><?=$erji['title']?></a>
          <?php }}}?>
     </div>
  </div>


<script>
  TouchSlide({slideCell:"#sd",effect:"leftLoop",mainCell:".dsffs",vis:3});
</script>
<script src="/static/newjs/iscroll.js"></script>
<script src="/static/newjs/mheader.js"></script><style type="text/css">

  .list-bj{width: 60px; height: 60px; border: 1px solid #ccc; text-align: center; line-height: 60px; font-size: 60px; font-family: "楷体"; font-weight: bold; color: #000000; _line-height:60px; *line-height:70px; line-height: 70px\9; margin-right:10px; }

  .area ul li:hover .list-bj{border: 1px solid #1653A3; color: #1653A3;}

  .area ul li:hover{border-bottom: 1px solid #1653A3; }

  .area ul{border-bottom: 1px solid #fff;}

</style>
<div class="iContainer">
  <div class="wrap clearfix">
    <div class="main">
            <div class="pro-con">
        <ul class="clearfix">
          <?php foreach ($goodsList as $goods) {?>
              <li>
                  <div class="pic"><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>"><img src="<?=$goods->photo?>"> </a> </div>
                  <p class="name"><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>"><?=$goods->goods_name?></a></p>
              </li>
          <?php }?>
        </ul>
      </div>
      <div class="pages">
                <?=LinkPager::widget([
	'pagination' => $pages,
	'firstPageLabel' => '首页',
	'lastPageLabel' => '尾页',
	'nextPageLabel' => '下一页',
	'prevPageLabel' => '上一页',
	'maxButtonCount' => 9,
]);?>

          </div>
  </div>
</div>

