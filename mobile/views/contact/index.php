<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;
?>
<link id="headercss" href="/static/newcss/mheader.css" type="text/css" rel="stylesheet" />
<nav class="yk-nav " id="mheader_nav">
    <div class="yk-nav-box">
        <div class="yk-nav-list" id="mheader_navbox">
            <ul class="yk-nav-pills">
              <li class="on"><a href="<?=Url::toRoute(['/contact'])?>"><i class="i0"></i>联系方式</a></li>
            </ul>
        </div>
    </div>
</nav>
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
                            <div class="back-color">
                    <div class="contact-wrap">
                        <div class="icontact clearfix">
                             <?=$content->content?>
                        </div>
                    </div>

                    <div class="cpxq">
                        <div class="tit">
                            <h2><em>*</em>产品推荐</h2>
                        </div>
                        <div class="xq-item-wrap clearfix">
                        <?php foreach ($goodsList as $goods) {?>
                            <div class="xq-item noMg">
                                <div class="pic"><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>"><img src="<?=$goods->photo?>" width="264" height="187" alt="<?=$goods->goods_name?>"> </a></div>
                                <div class="name">
                                    <?=$goods->goods_name?>
                                    <div class="kuan" date-id="<?=$goods->goods_id?>"></div>
                                </div>
                            </div>
                        <?php }?>
                        </div>
                        <script type="text/javascript">
                            $(".xq-item img").height($(".xq-item img").width()*0.8);
                            $(".xq-item-wrap .kuan").click(function(){
                                if($(this).hasClass("on")){
                                    $(this).removeClass("on");
                                }else{
                                    $(this).addClass("on");
                                }
                            });
                        </script>
                    </div>
                </div>
    </div>
</div>

