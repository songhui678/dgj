<?php
use yii\helpers\Url;
?>
<link href="/static/css/product.css" rel="stylesheet">
<div class="blk-xs fl">
    <div class="p14-left-nav-1 b">
 <div class="p14-left-nav-1-tit">
  <h3>资讯中心<span>/information</span></h3>
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
       <a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->title?>"><?=$goods->title?></a>
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
    <div class="p14-showcase b">

    <div class="p14-showcase-left">
        <div class="p14-showcase-left-jt p14-showcase-left-prev"><img alt="" src="/images/p15-icon2.png"></div>
        <div class="p14-showcase-left-jt p14-showcase-left-next"><img alt="" src="/images/p15-icon3.png"></div>
        <div class="p14-showcase-left-pic">
            <ul>

                    <li><img alt="BIOCOOL-1350层析实验冷柜" src="/resource/images/bb63fabad25b4afdbe00358abbe9013a_3.png"></li>

            </ul>
        </div>
        <div class="p14-showcase-left-size">
            <span></span>/<em></em>
        </div>
        <div class="clear"></div>
    </div>
    <div class="p14-showcase-right">
        <div class="p14-showcase-right-tit"><span>BIOCOOL-1350层析实验冷柜</span></div>
        <div class="p14-showcase-right-con">BIOCOOL智能型全不锈钢层析实验冷柜是专为生化层析实验而研制的特殊用途低温层析柜，也可用于其他需要低温环境的实验，或用于物品冷藏。</div>
        <div class="hotline">
            <span class="tel"></span>
            <div class="text">
                <p>服务热线:</p>
                <h3>010-68173889</h3>
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
               <style>
    .ys {
        font-family: "Microsoft Yahei";
        padding: 20px 0;
    }

    .ys h2 {
        text-align: center;
    }

    .ys h2 a {
        color: #0674b1;
        font-size: 30px;
    }

    .ys h2 span {
        background:url("/resource/images/cc7d75c358154d489dff0d6ba519e9e0_24.jpg?ver=1") no-repeat scroll center 12px;
        color: #666666;
        display: block;
        font-size: 20px;
        font-weight: normal;
        margin-top: 10px;
    }
</style>
<div class="ys">
    <h2>
        <a>BIOCOOL系列层析实验冷柜<span>专业冻干设备+解决方案提供商</span></a>
    </h2>
</div>
<p style="text-indent:2em;">
    BIOCOOL系列智能型全不锈钢层析实验冷柜是专为生化层析实验而研制的特殊用途低温层析柜，也可用于其他需要低温环境的实验，<span style="text-indent:2em;">或用于物品冷藏。</span>
</p>
<p style="text-indent:2em;">
    <span style="text-indent:28px;white-space:normal;">经过科学设计，层析冷柜内外部全不锈钢，符合GMP标准要求，柜体总高度不超过2米，便于进出房间和电梯；柜内空间大，</span>满足各种层析实验要求。<span style="text-indent:2em;"></span>
</p>
<p style="text-indent:2em;">
    <span style="text-indent:28px;white-space:normal;">BIOCOOL-950型为单门层析柜，内部最高为1.7米，长度1.5米的层析柱也可轻松操作。</span>
</p>
<p style="text-indent:2em;">
    <span style="text-indent:28px;white-space:normal;">BIOCOOL-1350型为双门层析柜，拥有宽敞的内部空间，可放置更多实验器材。</span>
</p>
<p style="text-indent:2em;">
    <span style="text-indent:28px;white-space:normal;"><span style="text-indent:28px;white-space:normal;">BIOCOOL-2650型为三门层析柜，解决中小试层析实验空间需求。</span></span>
</p>
<div class="ys">
    <h2>
        <a>主要特点<span>专业冻干设备+解决方案提供商</span></a>
    </h2>
</div>
<p>
    <img align="" alt="BIOCOOL-1350a" height="545" src="/resource/images/bb63fabad25b4afdbe00358abbe9013a_16.png" style="float:left;" title="BIOCOOL-1350a" width="430">
</p>
<p style="text-indent:2em;">
    ★ 采用进口全封闭制冷系统；
</p>
<p style="text-indent:2em;">
    ★ 柜体内外全不锈钢，全方位防腐；
</p>
<p style="text-indent:2em;">
    ★ 全智能PLC控制系统，控制精确稳定；
</p>
<p style="text-indent:2em;">
    ★ 标配数据记录系统，可存储数据及曲线；
</p>
<p style="text-indent:2em;">
    ★ 标配工业触摸屏系统，人机互动性好；
</p>
<p style="text-indent:2em;">
    ★ 选配远程监控系统，最远监控距离500米；
</p>
<p style="text-indent:2em;">
    ★ 柜内温度湿度监控功能；
</p>
<p style="text-indent:2em;">
    ★ 全透视双层保温玻璃门，配备安全门锁；
</p>
<p style="text-indent:2em;">
    ★ 标配2根层析柱固定杆，2层开放式载重托板；
</p>
<p style="text-indent:2em;">
    ★ 标配照明灯，消毒灯，柜内电源插座；
</p>
<p style="text-indent:2em;">
    ★ 温度安全安全防护功能，各种故障报警功能；
</p>
<p style="text-indent:2em;">
    ★ 专设低温开关，确保柜内器材和样品的安全；
</p>
<p style="text-indent:2em;">
    ★ 全自动除霜功能，无需停机，智能便捷；
</p>
<p style="text-indent:2em;">
    ★ 标配专用滑动托板，承重125公斤。
</p>
<div class="clear">
</div>
<div class="ys">
    <h2>
        <a>技术参数<span>专业冻干设备+解决方案提供商</span></a>
    </h2>
</div>
<style>
    .prodt {
        border: 1px solid #eee;
        margin-bottom: 20px;
        font-size: 14px;
    }

    .prodt td.td1 {
        text-align: center;
        font-weight: bold;
        background: #0674b1;
        color: #FFFFFF;
        text-align: center;
    }

    .prodt td.td2 {
        background: #d61310;
        color: #fff;
        padding: 0 10px;
        text-align: center;
    }

    .prodt td {
        background: #e7e6e6;
        border: 1px solid #d1d1d1;
        color: #333;
        padding: 10px;
        text-align: center;
    }
</style>
<div class="tableScrolling" style="margin:0;padding:0;display:block;overflow-x:auto;-webkit-overflow-scrolling:touch;">
    <table border="0" class="prodt ke-zeroborder" width="100%">
        <tbody>
            <tr>
                <td class="td1">
                    型号
                </td>
                <td>
                    BIOCOOL-950
                </td>
                <td>
                    BIOCOOL-1350
                </td>
                <td>
                    BIOCOOL-2650
                </td>
            </tr>
            <tr>
                <td class="td1">
                    控温范围
                </td>
                <td>
                    0~10℃
                </td>
                <td>
                    0~10℃
                </td>
                <td>
                    0~10℃
                </td>
            </tr>
            <tr>
                <td class="td1">
                    温度控制精度
                </td>
                <td>
                    ±0.3℃
                </td>
                <td>
                    ±0.3℃
                </td>
                <td>
                    ±0.3℃
                </td>
            </tr>
            <tr>
                <td class="td1">
                    湿度测量范围
                </td>
                <td>
                    0-100%
                </td>
                <td>
                    0-100%
                </td>
                <td>
                    0-100%
                </td>
            </tr>
            <tr>
                <td class="td1">
                    湿度测量精度
                </td>
                <td>
                    ±3%
                </td>
                <td>
                    ±3%
                </td>
                <td>
                    ±3%
                </td>
            </tr>
            <tr>
                <td class="td1">
                    控制系统
                </td>
                <td colspan="3">
                    PLC+触摸屏
                </td>
            </tr>
            <tr>
                <td class="td1">
                    远程控制系统
                </td>
                <td colspan="3">
                    选配
                </td>
            </tr>
            <tr>
                <td class="td1">
                    自动除霜系统
                </td>
                <td colspan="3">
                    标配
                </td>
            </tr>
            <tr>
                <td class="td1">
                    承重滑动托板
                </td>
                <td colspan="3">
                    标配
                </td>
            </tr>
            <tr>
                <td class="td1">
                    照明灯
                </td>
                <td colspan="3">
                    标配
                </td>
            </tr>
            <tr>
                <td class="td1">
                    紫外消毒灯
                </td>
                <td colspan="3">
                    标配
                </td>
            </tr>
            <tr>
                <td class="td1">
                    容积
                </td>
                <td>
                    950L
                </td>
                <td>
                    1350L
                </td>
                <td>
                    2650L
                </td>
            </tr>
        </tbody>
    </table>
</div>
<p>
    <br>
</p>
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
    <div class="clear"></div>


</div>
    <div class="clear"></div>
    <div class="p14-product-3 b">
    <div class="p14-product-3-tit"><b>热品推荐</b> <span>/ Hot product </span></div>
    <div class="p14-product-3-list">

            <dl class="p14-product-clear">
                <dt>
                    <a href="/products/BIOCOOL1350CengXiShiYanLingG.html" title="BIOCOOL-1350层析实验冷柜">
                        <img alt="BIOCOOL-1350层析实验冷柜" src="/resource/images/bb63fabad25b4afdbe00358abbe9013a_3.png" title="BIOCOOL-1350层析实验冷柜">
                    </a>
                </dt>
                <dd>
                    <h3><a href="/products/BIOCOOL1350CengXiShiYanLingG.html" title="BIOCOOL-1350层析实验冷柜">BIOCOOL-1350层析实验冷柜</a></h3>
                    <div class="p14-product-3-desc">
                        BIOCOOL智能型全不锈钢层析实验冷柜是专为生化层析实验而研制的特殊用途低温层析柜，也可用于其他需要低温环境的实验，或用于物品冷藏。
                    </div>
                </dd>
            </dl>

    <div class="clear"></div>
    </div>

</div>
   </div>
   <div class="clear"></div>
  </div>