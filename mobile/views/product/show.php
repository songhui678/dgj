<?php
use yii\helpers\Url;
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
            <a  class='on'  href="<?=Url::toRoute(['/product/cate', 'id' => $productCate['id']])?>" title="<?=$productCate['title']?>"><?=$productCate['title']?></a>
        </div>
    </div>


<script>
    TouchSlide({slideCell:"#sd",effect:"leftLoop",mainCell:".dsffs",vis:3});
</script>
<script src="/static/newjs/iscroll.js"></script>
<script src="/static/newjs/mheader.js"></script>
<div class="iContainer">
    <div class="wrap clearfix">
        <div class="art-box">
            <h2><?=$goods->goods_name?></h2>
            <div class="info"><span>浏览量：<?=$goods->view?></span><span>时间：<?php echo date("Y-m-d", $goods->create_time); ?></span></div>
        </div>
                <div class="pdisplay">
                        <div class="article">
                <div class="hd">
                    <h2>产品介绍</h2>
                </div>
                <div class="info">
                     <?=$goods->content?>
                </div>
            </div>
        </div>
            </div>
</div>
