<?php
use yii\helpers\Url;
?>
<link href="/mobile/css/product.css" rel="stylesheet">
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

    <div class="m4-prod-showcase-1" id="picScroll2">
        <div class="picScroll1 bd">
            <h3><?=$goods->goods_name?></h3>
            <div class="swiper-container">
                <ul class="swiper-wrapper">

                        <li class="swiper-slide">
                        <img alt="<?=$goods->goods_name?>" src="<?=$goods->photo?>">
                        </li>

                </ul>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </div>

</div>
   <div class="m4-blk blk endit-content">
    <div class="m4-prod-content-1-con">
        <div class="m4-prod-content-1-con-txt prod-content">
            <h3>产品简介</h3>
        </div>
        <a href="tel:010-51656110" title="010-51656110"><div class="m4-pho">电话咨询：010-51656110</div></a>

    </div>


</div>
   <div class="m4-blk blk">
    <div class="m2-prod-content-1 endit-content">
        <ul class="m2-prod-content-1-nav m4-title1">

                <li class="on">产品详情</li>

            <span class="togglebtn">...</span>
        </ul>
        <div class="m2-prod-content-1-con editor-reset">
<?=$goods->content?>

<script type="text/javascript">
    $(function() {
        var tableScr = $(".tableScrolling");
        var isWin = Boolean(navigator.platform.match(/(Win32|Windows|Mac68K|MacPPC|Macintosh|MacIntel)/g));
        for (var i = 0; i < tableScr.length; i++) {
            var $iTableScr = $(tableScr[i]);
            var hasHint = $iTableScr.next().hasClass('tablesHint');
            if (($iTableScr.children("table").width() > $iTableScr.width()) && !isWin) {
                if (!hasHint) {
                    tableScr.after('<p class="tablesHint" style="font-size:12px;margin:0;padding:5px 0 0 0;text-indent:0;text-align:left;">左右拖动表格显示其他内容</p>');
                }
                tableScr.eq(i).next(".tablesHint").eq(0).show();
            }
        }
    });
</script>
</div>


        </div>
    </div>


</div>
   <!--<div nsw:blk="m4-分享"></div>-->
   <div class="m4-blk blk">
    <div class="m4-nsws-list-content-1">
        <h2 class="m4-title1">推荐资讯</h2>
        <div class="m4-nsws-list-content-1-con">
            <ul>
              <?php foreach ($articleList as $key => $article) {?>
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
  </div>