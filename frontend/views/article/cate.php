<?php
use yii\helpers\Url;
?>
<link href="static/css/article_list.css" rel="stylesheet">
<div class="blk-xs fl">
    <div class="p14-left-nav-1 b">
 <div class="p14-left-nav-1-tit">
  <h3>资讯中心<span>/information</span></h3>
 </div>
 <div class="p14-left-nav-1-nav" navvicefocus1="">
    <?php if (!empty($cateList)): ?>
        <?php foreach ($cateList as $data): ?>
           <div class="p14-left-nav-1-nav-one">
            <h3>
            <a href="<?=Url::to(['/article/cate', 'id' => $data->id])?>"><?=$data->title?></a>
            </h3>
           </div>
       <?php endforeach;?>
   <?php endif;?>
 </div>
 <div class="clear"></div>
</div>
    <div>
    <div class="contact-z1">
        <p>咨询热线</p>
        <span>010-68173889</span>
    </div>

</div>
   </div>
   <div class="blk-sm fr">
    <div class="p14-infolist-1 b">
    <div class="p14-infolist-1-t1">
        <dl>
            <dt><a href="/articles/BoYiKang2017ZhiBeiSePuJiDong.html" title="博医康“2017制备色谱及冻干技术华北区域研讨会”成功召开">博医康“2017制备色谱及冻干技术华北区域研讨会”成功召开</a><span>头条</span></dt>
            <dd>
                <div class="p14-infolist-1-t1-desc">
                        2017年7月18日，由北京博医康举办的“2017制备色谱及冻干技术华北区域研讨会”在北京博医康总部成功召开。
                </div>
                <div class="p14-infolist-1-t1-deta">
                    <a href="/articles/BoYiKang2017ZhiBeiSePuJiDong.html" title="博医康“2017制备色谱及冻干技术华北区域研讨会”成功召开">详情</a>
                </div>
            </dd>
        </dl>
    </div>


    <div class="p14-infolist-1-list">


        <dl>
            <dt><a href="/articles/CISILE2017KaiMuBeiJingBoYiKa.html"><img alt="CISILE 2017开幕 北京博医康应邀参展" src="/resource/images/da9bc071970949ef9d429ca3e4d0506a_57.png" title="CISILE 2017开幕 北京博医康应邀参展"></a></dt>
            <dd>
                <h4><a href="/articles/CISILE2017KaiMuBeiJingBoYiKa.html" title="CISILE 2017开幕 北京博医康应邀参展">CISILE 2017开幕 北京博医康应邀参展</a></h4>
                <div class="p14-infolist-1-list-desc">作为CISILE的常客，北京博医康应邀参加了本次盛会，并展出了众多自主研发的冻干机系列产品，在展会中引发了多方关注。</div>
                <div class="p14-infolist-1-list-deta">
                    <a href="/articles/CISILE2017KaiMuBeiJingBoYiKa.html" title="CISILE 2017开幕 北京博医康应邀参展">了解详情</a>
                </div>
            </dd>
        </dl>








        <dl>
            <dt><a href="/articles/BoYiKang2016LingDongGanZaoJi.html"><img alt="博医康2016冷冻干燥技术研讨会在京举行" src="/resource/images/ff8bba171d024717a1a2a48424f3675b_63.jpg" title="博医康2016冷冻干燥技术研讨会在京举行"></a></dt>
            <dd>
                <h4><a href="/articles/BoYiKang2016LingDongGanZaoJi.html" title="博医康2016冷冻干燥技术研讨会在京举行">博医康2016冷冻干燥技术研讨会在京举行</a></h4>
                <div class="p14-infolist-1-list-desc">2016年6月16日，由北京博医康主办的“冷冻干燥技术研讨会”在博医康总部举办，来自北京地区的科研人员及冻干机用户参加此…</div>
                <div class="p14-infolist-1-list-deta">
                    <a href="/articles/BoYiKang2016LingDongGanZaoJi.html" title="博医康2016冷冻干燥技术研讨会在京举行">了解详情</a>
                </div>
            </dd>
        </dl>





    </div>
    <div class="clear"></div>

</div>
    <div class="p12-pagination-1 g">
    <div class="p12-pagination-1-main">
        <a href="#"><img src="/images/p12-pagination1.jpg"></a>
        <span>...</span>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <span>...</span>
        <a href="#"><img src="/images/p12-pagination2.jpg"></a>
    </div>
    <div class="clear"></div>

    <script>
        $(function(){
            laypage({
                cont: $('.p12-pagination-1-main'),
                pages: 2,
                skip: false,
                skin: '',
                groups: 3,
                curr: 1,
                prev: '<img src="/images/p12-pagination1.jpg" title="上一页">', //若不显示，设置false即可
                first: ' ',
                last: ' ',
                next: '<img src="/images/p12-pagination2.jpg" title="下一页">', //若不显示，设置false即可
                hash: true,
                jump: function(obj, flag) {
                    var space = '0000';
                    var num = obj.curr + '';
                    var base =$('head').data('base');
                    if (space.length - num.length >= 0) {
                        space = space.slice(0, space.length - num.length) + num;
                        if (!flag) {
                            if (obj.curr == 1) {
                                window.location.href = base + 'article/TouTiaoXinWen' + '.html';
                            } else {
                                window.location.href = base + 'article/TouTiaoXinWen' + '_' + space + '.html'
                            }
                        }
                    }
                }
            });
        })
    </script>
</div>
   </div>
   <div class="clear"></div>
  </div>