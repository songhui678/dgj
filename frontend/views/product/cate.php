<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<link href="/static/css/product_list.css" rel="stylesheet">
<div class="blk-xs fl">
    <div class="p14-left-nav-1 b">
 <div class="p14-left-nav-1-tit">
  <h3>产品中心<span><?=Url::toRoute(['/product'])?></span></h3>
 </div>
 <div class="p14-left-nav-1-nav" navvicefocus1="">

   <div class="p14-left-nav-1-nav-one">
    <h3><a href="/product/ZhenKongLingDongGan.html" title="真空冷冻干燥机">真空冷冻干燥机</a></h3>
    <dl style="display:none;">
     <!-- 2级 -->

      <dt>
       <a href="/product/ZhongShiDongGanJi5484.html" title="中试冻干机">中试冻干机</a>
      </dt>
      <dd style="display:none;">
       <!-- 3级 -->

        <p class="pl3"> <span><a href="/product/PilotXiLieJingJiXing.html" title="Pilot系列（经济型）">&gt;&gt; Pilot系列（经济型）</a></span>
         <!-- 4级 --> <em class="pl4">

           <a href="/product/PilotLXiLie.html" title="Pilot-L系列">Pilot-L系列</a>

           <a href="/product/PilotEXiLie.html" title="Pilot-E系列">Pilot-E系列</a>
           </em> </p>

        <p class="pl3"> <span><a href="/product/PilotXiLieBiaoZhunXing.html" title="Pilot系列（标准型）">&gt;&gt; Pilot系列（标准型）</a></span>
         <!-- 4级 --> <em class="pl4">

           <a href="/product/PilotMXiLie.html" title="Pilot-M系列">Pilot-M系列</a>
           </em> </p>

        <p class="pl3"> <span><a href="/product/PilotXiLieQuanGongNenXing.html" title="Pilot系列（全功能型）">&gt;&gt; Pilot系列（全功能型）</a></span>
         <!-- 4级 --> <em class="pl4">

           <a href="/product/PilotHXiLie.html" title="Pilot-H系列">Pilot-H系列</a>

           <a href="/product/PilotTXiLie.html" title="Pilot-T系列">Pilot-T系列</a>
           </em> </p>

      </dd>

      <dt>
       <a href="/product/ShiYanShiDongGan.html" title="实验室冻干机">实验室冻干机</a>
      </dt>
      <dd style="display:none;">
       <!-- 3级 -->

        <p class="pl3"> <span><a href="/product/ShiYanShiDongGan7746.html" title="实验室冻干机（专业型）">&gt;&gt; 实验室冻干机（专业型）</a></span>
         <!-- 4级 --> <em class="pl4">

           <a href="/product/Lab150XiLie.html" title="Lab-1-50系列">Lab-1-50系列</a>

           <a href="/product/Lab180XiLie.html" title="Lab-1-80系列">Lab-1-80系列</a>
           </em> </p>

        <p class="pl3"> <span><a href="/product/ShiYanShiDongGan3740.html" title="实验室冻干机（经济型）">&gt;&gt; 实验室冻干机（经济型）</a></span>
         <!-- 4级 --> <em class="pl4">

           <a href="/product/Fd150XiLie.html" title="Fd-1-50系列">Fd-1-50系列</a>

           <a href="/product/Fd180XiLie.html" title="Fd-1-80系列">Fd-1-80系列</a>

           <a href="/product/Fd2XiLie.html" title="Fd-2系列">Fd-2系列</a>

           <a href="/product/LabXiLieJingJiXing.html" title="Lab系列经济型">Lab系列经济型</a>
           </em> </p>

      </dd>

      <dt>
       <a href="/product/ShengChanXingDongGan.html" title="生产型冻干机">生产型冻干机</a>
      </dt>
      <dd style="display:none;">
       <!-- 3级 -->

        <p class="pl3"> <span><a href="/product/LYOXiLieZhenKongLingDongGanZ6825.html" title="LYO系列冻干机(标准型)">&gt;&gt; LYO系列冻干机(标准型)</a></span>
         <!-- 4级 --> <em class="pl4">
           </em> </p>

        <p class="pl3"> <span><a href="/product/LYOXiLieZhenKongLingDongGanZ.html" title="LYO系列冻干机(经济型)">&gt;&gt; LYO系列冻干机(经济型)</a></span>
         <!-- 4级 --> <em class="pl4">
           </em> </p>

      </dd>

    </dl>
   </div>

   <div class="p14-left-nav-1-nav-one">
    <h3><a href="/product/CengXiShiYanLing.html" title="层析实验冷柜">层析实验冷柜</a></h3>
    <dl style="display:none;">
     <!-- 2级 -->

      <dt>
       <a href="/product/YCXiLieCengXiShiYanLingGui.html" title="YC系列层析实验冷柜">YC系列层析实验冷柜</a>
      </dt>


      <dt>
       <a href="/product/BIOCOOLXiLieCengXiShiYanLing.html" title="BIOCOOL系列层析实验冷柜">BIOCOOL系列层析实验冷柜</a>
      </dt>


    </dl>
   </div>

   <div class="p14-left-nav-1-nav-one">
    <h3><a href="/product/ZhenKongGanZaoXiang.html" title="真空离心浓缩仪">真空离心浓缩仪</a></h3>

   </div>

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