<?php
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
?>
<link href="/static/css/product.css" rel="stylesheet">
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
			'label' => '非标定制',
			'url' => ['/product'],
			'template' => " {link}",
		],
		[
			'label' => '非标定制',
			'url' => ['/product/show'],
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
       <a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>"><?=$goods->goods_name?></a>
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
        <span>010-51656110</span>
    </div>

</div>
   </div>
   <div class="blk-sm fr">
    <div class="p14-showcase b">

    <div class="p14-showcase-left">
        <div class="p14-showcase-left-jt p14-showcase-left-prev"><img alt="" src="/images/p15-icon2.png"></div>
        <div class="p14-showcase-left-jt p14-showcase-left-next"><img alt="" src="/images/p15-icon3.png"></div>
        <div class="p14-showcase-left-pic">
            <ul>
                <li><img alt="<?=$goods->goods_name?>" src="<?=$goods->photo?>"></li>
            </ul>
        </div>
        <div class="p14-showcase-left-size">
            <span></span>/<em></em>
        </div>
        <div class="clear"></div>
    </div>
    <div class="p14-showcase-right">
        <div class="p14-showcase-right-tit"><span><?=$goods->goods_name?></span></div>
        <div class="p14-showcase-right-con"><?=$goods->description?></div>
        <div class="hotline">
            <span class="tel"></span>
            <div class="text">
                <p>服务热线:</p>
                <h3>010-51656110</h3>
            </div>
        </div>
    </div>
    <div class="clear"></div>




</div>
    <div class="clear"></div>
    <div class="p14-prodcontent-1 b">
   <div class="p14-prodcontent-1-nav">
       <ul>

           <li class="cur">产品详情</li>

       </ul>
   </div>
   <div class="clear"></div>
   <div class="p14-prodcontent-1-desc endit-desc endit-content">

           <div class="p14-prodcontent-1-text p14-prodcontent-1-cur">
                <?=$goods->content?>
            </div>


   </div>
    <div class="clear"></div>


</div>
    <div class="clear"></div>
    <div class="p14-product-3 b">
    <div class="p14-product-3-tit"><b>热品推荐</b> <span>/ Hot product </span></div>
    <div class="p14-product-3-list">
    <?php foreach ($goodsList as $goods) {?>
            <dl>
                <dt>
                    <a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>">
                        <img alt="<?=$goods->goods_name?>" src="<?=$goods->photo?>" title="<?=$goods->goods_name?>">
                    </a>
                </dt>
                <dd>
                    <h3><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>"><?=$goods->goods_name?></a></h3>
                    <div class="p14-product-3-desc">
                        <?=$goods->description?>
                    </div>
                </dd>
            </dl>
        <?php }?>



   <div class="clear"></div>
    </div>

</div>
   </div>
   <div class="clear"></div>
  </div>