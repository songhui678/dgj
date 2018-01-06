<?php
use yii\helpers\Url;
?>
<div class="banner" id="banner">
  <div class="bd">
    <ul>
        <?php if (!empty($adverList)) {?>
        <?php foreach ($adverList as $adver) {?>
            <li style="display: table-cell; vertical-align: top; width: 640px;"><a href="<?=$adver->url?>" target="_blank" title="<?=$adver->title?>"><img src="<?=$adver->photo?>" alt="<?=$adver->title?>"></a>
            </li>
        <?php }}?>
    </ul>
  </div>
    <div class="hd">
        <ul></ul>
    </div>
</div>
<script type="text/javascript">
  TouchSlide({
    slideCell:"#banner",
    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
    mainCell:".bd ul",
    effect:"left",
    autoPlay:true,//自动播放
    autoPage:true, //自动分页
    switchLoad:"_src" //切换加载，真实图片路径为"_src"
  });
</script>
<div class="solution">
    <img src="/static/images/solution.jpg">
    <div class="solution-wrap">
        <ul>
            <li>
                <a href="<?=Url::toRoute(['/product/cate', 'id' => 1])?>">
                    <p><img src="/static/images/s_1.png"> </p>
                    冻干机</a>
            </li>
            <li>
                <a href="<?=Url::toRoute(['/product/cate', 'id' => 2])?>">
                    <p><img src="/static/images/s_2.png"> </p>
                    超微粉气流粉碎机</a>
            </li>
             <li>
                <a href="<?=Url::toRoute(['/product/cate', 'id' => 4])?>">
                    <p><img src="/static/images/s_3.png"> </p>
                    微射流均质机</a>
            </li>
        </ul>
    </div>
</div>
<div class="product" id="product">
    <link id="headercss" href="/static/newcss/mheader.css" type="text/css" rel="stylesheet" />
    <nav class="yk-nav yk-pro" id="mheader_nav">
        <div class="yk-nav-box">
            <div class="yk-nav-list" id="mheader_navbox">
                <ul class="yk-nav-pills">
                  <?php foreach ($cateList as $key => $cate) {?>
                  <li><a href="javascript:;"><i class="i<?=$key?>"></i><?=$cate['title']?></a></li>
                  <?php }?>
                </ul>
            </div>
        </div>
    </nav>
    <script src="/static/newjs/iscroll.js"></script>
    <script src="/static/newjs/mheader.js"></script>
    <div class="pro-con">
      <?php foreach ($cateList as $key => $cate) {?>
        <div class="pro-con-list">
            <ul class="clearfix">
              <?php foreach ($cate['goodsList'] as $goods) {?>
                <li>
                    <div class="pic"><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>"><img src="<?=$goods->photo?>" alt="<?=$goods->goods_name?>"> </a> </div>
                    <p class="name"><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>"><?=$goods->goods_name?></a> </p>
                </li>
              <?php }?>
            </ul>
            <div class="detail">
                <img src="/static/images/detail.jpg">
                <a href="<?=Url::toRoute('/product')?>">更多产品</a>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<script type="text/javascript">
    TouchSlide({
        slideCell:"#product",
        titCell:".yk-nav-pills li", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
        mainCell:".pro-con",
        effect:"left",
        autoPage:false, //自动分页
        autoPlay:false
    })
</script>
<div class="about">
    <div class="hd">
        <h2>关于我们</h2>
        <div class="txt">新默真科技，专业为实验室提供完善、一体化系统解决方案。</div>
    </div>
        <div class="pic">
        <img src="/static/images/147643440164642800.jpg">
    </div>
    <div class="info">
        <h2><a href="<?=Url::toRoute('/about')?>">新默真科技</a></h2>
        <div class="intro">
          新默真科技（北京）有限公司经销仪器设备，主要致力和服务于研究和中试生产领域，有着优质的产品和良好的售后服务。新默真科技（北京）有限公司的诚信、实力和产品质量获得业界的认可。
        </div>
        <p class="more"><a href="<?=Url::toRoute('/about')?>"><img src="/static/images/more.jpg"> </a> </p>
    </div>
    </div>
<div class="news" id="news">
    <div class="bd clearfix">
            </div>
    <div class="hd">
        <ul></ul>
    </div>
</div>
<script type="text/javascript">
    TouchSlide({
        slideCell:"#news",
        titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
        effect:"leftLoop",
        autoPage:true //自动分页
    })
</script>

<script type="text/javascript">
    $('.case .case-list img').first().load(function(){
      var ht = $(".case .case-list").height();
      $(".case-box").height(ht);
    });
        TouchSlide({
        slideCell:"#case-list-1",
        titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
        mainCell:".bd",
        autoPage:true, //自动分页
        pnLoop:"false", // 前后按钮不循环
        switchLoad:"_src" //切换加载，真实图片路径为"_src"
    });
        TouchSlide({
        slideCell:"#case-list-2",
        titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
        mainCell:".bd",
        autoPage:true, //自动分页
        pnLoop:"false", // 前后按钮不循环
        switchLoad:"_src" //切换加载，真实图片路径为"_src"
    });
        TouchSlide({
        slideCell:"#case-list-3",
        titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
        mainCell:".bd",
        autoPage:true, //自动分页
        pnLoop:"false", // 前后按钮不循环
        switchLoad:"_src" //切换加载，真实图片路径为"_src"
    });
        TouchSlide({
        slideCell:"#case-list-4",
        titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
        mainCell:".bd",
        autoPage:true, //自动分页
        pnLoop:"false", // 前后按钮不循环
        switchLoad:"_src" //切换加载，真实图片路径为"_src"
    });
        $(".case .case-tit li").click(function(){
        var num = $(this).index()+1;
        $(this).addClass("on");
        $(this).siblings().removeClass("on");
        $(".case-list-"+num).css("z-index", "1");
        $(".case-list-"+num).siblings().css("z-index", "0");
    });
</script>
