<?php
use yii\widgets\Breadcrumbs;
?>
<link href="/mobile/css/search.css" rel="stylesheet">
<div>
        <div class="m4-title_nav">
            <div class="m4-t-sear1"></div>
            <a class="m4-goback" href="javascript:history.back(-1);">返回上一页</a>
            <a href="/search" id="m4-topclick"></a>
            <h2>搜索结果</h2>
        </div>
    </div>
      <!-- END FOOTER -->
    <?php $this->beginContent('@app/views/layouts/public/setting.php')?>
    <?php $this->endContent()?>
</div>
   <!-- 面包屑 -->
   <div class="m4-blk">
    <div class="m4-crumbs-1">
<?php echo Breadcrumbs::widget(['homeLink' => [
	'label' => '首页',
	'url' => ['/'],
	'template' => "<p>{link}<span>&gt;</span>",
],
	'links' => [
		[
			'label' => '搜索结果',
			'url' => ['/search'],
			'template' => "{link}<p>",
		],

	]]);
?>
    </div>
</div>

<style>
    .t {color:#666}
  *{margin: 0px;margin: 0px;}
li,ul,ol{list-style: none;}
a{text-decoration: none;}
body {font-family: "方正黑体简体",Helvetica,STHeiTi,sans-serif;}
    .t1-search-result { position: relative; color: #666; }
    .t1-search-result .t1-mt { position: relative; _position: relative !important; z-index: 99; width: 100%; font-size: 12px; }
    .t1-search-result .t1-mt .t1-fore-1 { position: relative; z-index: 99;  padding: 0 1rem; border-bottom: 1px solid #cdcdcd; background-color: #ebebeb; overflow: hidden;}
    .t1-search-result .t1-mt .t1-fore-1 li {     float: left;
    height: 2.9rem;
    line-height: 2.9rem; }
    .t1-search-result .t1-mt .t1-fore-1 .t1-first-link {display: inline-block; height: 1.6rem; line-height: 1.6rem; margin-right: 1.5rem; padding: 0 .3rem; color:#3f3f3f;margin-top:.7rem;}
    .t1-search-result .t1-mt .t1-fore-1 .t1-first-link:hover { color: #fff; background-color: #3f3f3f;text-decoration: none;}
    .t1-search-result .t1-mt .t1-fore-1 .t1-current .t1-first-link {color: #fff; background-color: #3f3f3f;}
    .t1-search-result .t1-mt .t1-fore-1 .t1-panel { display: none; position: absolute; left: 0; top: 47px; z-index: 999; border: 1px solid #cbcbcb; background-color: #fafafa; }
    .t1-search-result .t1-mt .t1-fore-1 .t1-panel a { display: block; width: 100px; padding: 8px 20px; border-bottom: 1px solid #cbcbcb; color: #666; text-decoration: none; }
    .t1-search-result .t1-mt .t1-fore-1 .t1-panel a:last-child {border-bottom: 0 none;}
    .t1-search-result .t1-mt .t1-fore-1 .t1-panel a:hover { color: #055ca3; background-color: #fff; }
    .t1-search-result .t1-mt .t1-fore-2 { display: none; height: 32px; line-height: 32px; margin-top: 5px; border: 1px solid #cbcbcb; background-color: #f9f9f9; }
    .t1-search-result .t1-mt .t1-fore-2 .t1-time { float: left; }
    .t1-search-result .t1-mt .t1-fore-2 .t1-time dt { float: left; }
    .t1-search-result .t1-mt .t1-fore-2 .t1-time dd { float: left; margin-left: 14px; cursor: pointer; }
    .t1-search-result .t1-mt .t1-fore-2 .current { color: #c10914; }
    .t1-search-result .t1-mt .t1-fore-2 .t1-select {position: relative; z-index: 5; float: left; width: 200px; margin-left: 40px;}
    .t1-search-result .t1-mt .t1-fore-2 .t1-select dt {position: relative; z-index: 4; display: inline-block; width: 100%; height: 20px; line-height: 20px; margin-top: 5px; text-indent: 5px; border: 1px solid #d2ccc4; background: #fff url(images/t1-search-1.png) no-repeat 98% center; cursor: pointer; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;}
    .t1-search-result .t1-mt .t1-fore-2 .t1-select dd {display: none; position: absolute; left: 0; top: 29px; z-index: 10; width: 100%; border: 1px solid #d2ccc4; background: #fff;}
    .t1-search-result .t1-mt .t1-fore-2 .t1-select dd ul {width: 100%; overflow: auto;}
    .t1-search-result .t1-mt .t1-fore-2 .t1-select dd li a {display:block; height: 28px; line-height:28px; padding: 0 5px; color: #666; text-decoration: none;}
    .t1-search-result .t1-mt .t1-fore-2 .t1-select dd li a:hover {color: #C10914; background:#f5f5f5;}
    .t1-search-result .t1-mt .t1-fore-2 .t1-btn-close {position: absolute; right: 0; top: 5px; width: 22px; height: 22px; background: url(images/t1-search-3.png) no-repeat center center; cursor: pointer;}
    .t1-search-result .t1-mt .t1-fore-2 .t1-decoration {position: absolute; right: 30px; top: -7px; width: 7px; height: 7px; background: url(images/t1-search-2.png) no-repeat;}
    .t1-search-result .t1-mt .t1-fore-2-box {position: relative; height: 32px; line-height: 32px; padding: 0 2%; background-color: #fff;}
    .t1-search-result .t1-mt .t1-fore-2-box .t1-select-group { float: left; }
    .t1-search-result .t1-mt .t1-filtrate {display:none; position: absolute; right: 20px; top: 0; z-index: 100; height: 2.9rem; line-height: 2.9rem; padding-left: 13px; color: #333; cursor: pointer; background: url(images/t1-search-4.png) no-repeat left center; }

    .t1-search-result-list {  padding:15px 2.3% 25px; border-bottom: 1px solid #cbcbcb; overflow: hidden; }
    .t1-search-result-list .t1-btn-more {margin-bottom:2rem; text-align:center; color: #333; display:block;font-size:1.2rem;}
    .t1-search-result-list-hd { display: block; padding-bottom: 10px; font-size: 14px; border-bottom: 1px solid #cdcdcd; line-height: 1.6rem;    height: 1.6rem;}
    .t1-search-result-list-bd { overflow: hidden; padding: 0px;margin-bottom:15px;}
    .t1-search-result-list-bd li {width: 100%; overflow: hidden; margin-top: 15px; padding-bottom: 15px; border-bottom: 1px dashed #e6e6e6;position: relative;}

    .t1-search-result-list-bd .t1-article-pic { width:30%;float:left;margin-right:5%;}

    .t1-search-result-list-bd .t1-article-pic img {width:100%;display: block;border: 1px solid #beb8b4;box-sizing:border-box;}
    .t1-search-result-list-bd .t1-article-info {margin-left:35%;}
    .t1-search-result-list-bd .t1-article-info-desc {margin-top:0.8rem;    height: 3.6rem;
    line-height: 1.8rem;
    padding-right: 1rem;
    font-size: 1.2rem;
    color: #595959;
    overflow: hidden;}
    .t1-search-result-list-bd h4 {text-overflow: ellipsis;white-space: nowrap;position: relative;font-weight:bold;}
    .t1-search-result-list-bd h4 .t1-article-link {  line-height: 25px; display:block; font-size: 16px; font-weight: 400; font-family: "宋体"; color: #666; white-space: nowrap; cursor: pointer; text-decoration: none;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;}
    .t1-search-result-list-bd h4 .t1-article-link:hover {color: #333;}
    .t1-search-result-list-bd h4 span {display: none;}
    .t1-search-result-list-bd h4 span a {color: #999; text-decoration: none;}
    .t1-search-result-list-bd h4 span a:hover {color: #666;}
    .t1-search-result-list-bd h4 .t1-icon {position: absolute; left: 0; top: 5px; width: 3px; height: 18px;}
    .t1-search-result-list-bd .t1-last { border-bottom: 0 none; }
    .t1-search-result .t1-search-num {  height: 2.8rem;line-height: 2.8rem;padding: 0 1rem;font-size: 1.1rem;color: #3f3f3f; }
    .t1-search-result-list .t1-search-num i { color: #f00; }
    .t1-search-result-list .t1-pagination {clear: both; margin-right: 0; overflow: hidden;text-align: center;}
    .t1-search-result-list .t1-pagination li {display: inline-block;vertical-align: top;}
    .t1-search-result-list .t1-pagination a {float: left; padding: 0 7px;   text-decoration: none;    margin: 0 3px 6px;    text-decoration: none;    border: 1px solid #ccc;    height: 26px;line-height: 26px;text-align: center;background-color: #fff;color: #666;padding: 0 10px;}
    .t1-search-result-list .t1-pagination a:hover {color: #666; border-color: #aaa;}
    .t1-search-result-list .t1-pagination .t1-current a {border-color: transparent; _border-color: #aaa;}
    .t1-search-result-list .t1-pagination .t1-disable a {color: #e1e1e1; border-color: #e1e1e1;}
    .Blue_page{width:100%;height:25px;}
    .Blue_page li{display:inline-block;margin-left:3px;}
    .Blue_page li a{margin: 0 1px;padding: 0 4px;border: 3px double #fff;background: #eee;color: #06f;text-decoration: none;font-family: Arial, Helvetica, sans-serif;font-size:12px;}
    .Blue_page li span.current{margin: 0 1px;padding: 0 4px;color: #fff;border: 3px double #fff;background: #f60;}
    .Blue_page li span{color:#06f;}

</style>


<div class="t1-search-result">

<div class="t1-mt">
    <ul class="t1-fore-1">
      <li id="all" onclick="searchByModule('all')"><a class="t1-first-link" href="javascript:void(0)">所有</a></li>

       <li  onclick="searchByModule('PROD')" id="PROD">
            <a  class="t1-first-link" href="javascript:void(0)">产品 (8)</a>
       </li>

       <li  onclick="searchByModule('ARTICLE')" id="ARTICLE">
            <a  class="t1-first-link" href="javascript:void(0)">文章 (24)</a>
       </li>
    </ul>


</div>

     <div class="t1-mc">
        <div class="t1-search-result-list">

           <b class="t1-search-result-list-hd">满足条件的产品</b>
            <ul class="t1-search-result-list-bd">


        <li class="t1-adaptive" onmouseover="onmouseover_hignLight('PROD')"   onmouseout="onmouseout_hignLight('PROD')">
                                       <div class="t1-article-pic"><a href="http://www.boyikang.com/mobile/products/FD1C50ZhenKongLingDongGanZao.html"><img alt="FD-1C-50真空冷冻干燥机" src="resource/images/8432dccbc4364c3b87a0f122660dbe5c_33.png" ></a></div>
                                       <div class="t1-article-info">
                       <h4>
                           <i class="t1-icon"></i>
                           <a class="t1-article-link" href="http://www.boyikang.com/mobile/products/FD1C50ZhenKongLingDongGanZao.html"  >FD-1C-50真空冷冻干燥机</a>
                            <span>2017-04-10 17:31</span>
                           <span>【产品】</span>
                       </h4>
                       <div class="t1-article-info-desc">FD-1-50系列<i style='color:red'>冻干机</i>，冷阱温度为-50℃，配置丰富，操作简便，具有紧凑的结构和灵活的组合方式，主机可与不同的干燥装置进行组合，以适应不同产品的冻干，例如：选用不锈钢盘可冻干散装物料，与带压盖装置的有机玻璃干燥室组合可冻干西林瓶，与带挂瓶的有机玻璃干燥室组合可冻干在烧瓶内的样品，与T型架附件组合可冻干安瓿，用于菌种保藏工作。</div>
                   </div>

        </li>





            </ul>
             <a class="t1-btn-more" onclick="searchByModule('PROD')">查看更多...</a>


           <b class="t1-search-result-list-hd">满足条件的文章</b>
            <ul class="t1-search-result-list-bd">


        <li class="t1-adaptive" onmouseover="onmouseover_hignLight('ARTICLE')"   onmouseout="onmouseout_hignLight('ARTICLE')">
                                       <div class="t1-article-pic"><a href="http://www.boyikang.com/mobile/articles/beijinghuayeshengwu.html"><img alt="北京华叶生物采购博医康中试冻干机Pilot3-6ES" src="resource/images/7a294fb3967742198c2dba0bf9dcc836_8.jpg" ></a></div>
                                       <div class="t1-article-info">
                       <h4>
                           <i class="t1-icon"></i>
                           <a class="t1-article-link" href="http://www.boyikang.com/mobile/articles/beijinghuayeshengwu.html"  >北京华叶生物采购博医康中试<i style='color:red'>冻干机</i>Pilot3-6ES</a>
                            <span>2017-11-10 14:54</span>
                           <span>【文章】</span>
                       </h4>
                       <div class="t1-article-info-desc">北京华叶生物工程有限公司成立于2005年8月，是一家从事生化、免疫、分子生物学等临床检测试剂的生产、销售为一体的生产服务型企业。</div>
                   </div>

        </li>



        <li class="t1-adaptive" onmouseover="onmouseover_hignLight('ARTICLE')"   onmouseout="onmouseout_hignLight('ARTICLE')">
                                       <div class="t1-article-pic"><a href="http://www.boyikang.com/mobile/articles/Pilot58ESTuRangDongGanJiTuRa.html"><img alt="Pilot5-8ES土壤冻干机-土壤样品冻干处理的神兵利器" src="resource/images/48d5218ef88b456cbdf06f49b8206b11_3.jpg" ></a></div>
                                       <div class="t1-article-info">
                       <h4>
                           <i class="t1-icon"></i>
                           <a class="t1-article-link" href="http://www.boyikang.com/mobile/articles/Pilot58ESTuRangDongGanJiTuRa.html"  >Pilot5-8ES土壤<i style='color:red'>冻干机</i>-土壤样品冻干处理的神兵利器</a>
                            <span>2017-07-12 16:39</span>
                           <span>【文章】</span>
                       </h4>
                       <div class="t1-article-info-desc">截止目前为止，博医康公司已形成完整的土壤监测样品前处理方案。土壤样品前处理方案涵盖土壤样品检测前元素的冻干锁定，土壤有机物的冻干锁定，土壤原形态的锁定，确保土壤样品检测前的物质保持，以保证土壤样本监测的真实性及有效性。</div>
                   </div>

        </li>



        <li class="t1-adaptive" onmouseover="onmouseover_hignLight('ARTICLE')"   onmouseout="onmouseout_hignLight('ARTICLE')">
                                       <div class="t1-article-pic"><a href="http://www.boyikang.com/mobile/articles/BoYiKangTuRang.html"><img alt="博医康土壤冻干机为环保事业保驾护航" src="resource/images/afbc180c309e4554b82604992a05fc20_55.jpg" ></a></div>
                                       <div class="t1-article-info">
                       <h4>
                           <i class="t1-icon"></i>
                           <a class="t1-article-link" href="http://www.boyikang.com/mobile/articles/BoYiKangTuRang.html"  >博医康土壤<i style='color:red'>冻干机</i>为环保事业保驾护航</a>
                            <span>2017-07-06 13:52</span>
                           <span>【文章】</span>
                       </h4>
                       <div class="t1-article-info-desc">随着工业、城市污染的加剧和农用化学物质种类、数量的增加，土壤重金属污染日益严重，北京博医康根据国家形势需要积极布局环保产业，为中国的土壤环境监测献计献策。</div>
                   </div>

        </li>



        <li class="t1-adaptive" onmouseover="onmouseover_hignLight('ARTICLE')"   onmouseout="onmouseout_hignLight('ARTICLE')">
                                       <div class="t1-article-pic"><a href="http://www.boyikang.com/mobile/articles/HeBeiTianSiShengWuKeJiCaiGou.html"><img alt="河北天思生物科技采购中试冻干机Pilot3-6ES" src="resource/images/606e833b5a9d4d94bb71e632d22ec9c4_3.png" ></a></div>
                                       <div class="t1-article-info">
                       <h4>
                           <i class="t1-icon"></i>
                           <a class="t1-article-link" href="http://www.boyikang.com/mobile/articles/HeBeiTianSiShengWuKeJiCaiGou.html"  >河北天思生物科技采购中试<i style='color:red'>冻干机</i>Pilot3-6ES</a>
                            <span>2017-06-09 09:53</span>
                           <span>【文章】</span>
                       </h4>
                       <div class="t1-article-info-desc">河北天思生物科技有限公司，主要经营生物技术开发、技术咨询、技术转让、技术推广；生物制品的研发、生产、销售；销售实验室仪器设备及通风设施、净水设备、食品药品检测设备、生物试剂等。</div>
                   </div>

        </li>



        <li class="t1-adaptive" onmouseover="onmouseover_hignLight('ARTICLE')"   onmouseout="onmouseout_hignLight('ARTICLE')">
                                       <div class="t1-article-pic"><a href="http://www.boyikang.com/mobile/articles/CISILE2017KaiMuBeiJingBoYiKa.html"><img alt="CISILE 2017开幕 北京博医康应邀参展" src="resource/images/da9bc071970949ef9d429ca3e4d0506a_57.png" ></a></div>
                                       <div class="t1-article-info">
                       <h4>
                           <i class="t1-icon"></i>
                           <a class="t1-article-link" href="http://www.boyikang.com/mobile/articles/CISILE2017KaiMuBeiJingBoYiKa.html"  >CISILE 2017开幕 北京博医康应邀参展</a>
                            <span>2017-05-25 14:07</span>
                           <span>【文章】</span>
                       </h4>
                       <div class="t1-article-info-desc">作为CISILE的常客，北京博医康应邀参加了本次盛会，并展出了众多自主研发的<i style='color:red'>冻干机</i>系列产品，在展会中引发了多方关注。</div>
                   </div>

        </li>


            </ul>
             <a class="t1-btn-more" onclick="searchByModule('ARTICLE')">查看更多...</a>

            </ul>


  </div>
  </div>
</div>



<script type="text/javascript">


$(function(){
    // 下拉列表
    function t1SelectFn(){
        $(".t1-select").each(function() {
            var s = $(this);
            var z = parseInt(s.css("z-index"));
            var dt = $(this).children("dt");
            var dd = $(this).children("dd");
            var _show = function() {
                dd.slideDown(150);
                dt.addClass("cur");
                s.css("z-index", z + 1);
            }; //展开效果
            var _hide = function() {
                dd.slideUp(100);
                dt.removeClass("cur");
                s.css("z-index", z);
            }; //关闭效果
            dt.click(function() {
                dd.is(":hidden") ? _show() : _hide();
            });
            dd.find("a").click(function() {
                dt.html($(this).html());
                _hide();
            }); //选择效果（如需要传值，可自定义参数，在此处返回对应的“value”值 ）
            $("body").click(function(i) { ! $(i.target).parents(".t1-select").first().is(s) ? _hide() : "";
            });
        })
    }
    t1SelectFn();

    // 筛选
    function t1FiltrateFn(){
        var searchResult = $(".t1-search-result");
        var fore2 = searchResult.find(".t1-fore-2");
        searchResult.find(".t1-filtrate").click(function(){
            fore2.stop().slideToggle(200);
        });
        searchResult.find(".t1-btn-close").click(function(){
            fore2.stop().slideUp(200);
        });
    }
    t1FiltrateFn();

     function t1searchResultLmarFn(){
            $('.t1-search-result-list-bd .t1-adaptive .t1-article-info').each(function(index, el) {
                var kk= $(el).prev('.t1-article-pic');
                if (kk.length===0) {
                    $(el).css('margin-left', '0px');
                }
            });
        }
        t1searchResultLmarFn();

    function t1searchResultMtFn(){
        var mt = $(".t1-search-result .t1-mt");
        if(mt.length > 0){
            mt.pin({containerSelector: ".t1-search-result"});
        }
    }
    t1searchResultMtFn();
                document.getElementById("sxall").className="current";
         document.getElementById("key").value="冻干机";
     var title="冻干机"+"-"+ document.title ;
     document.title = title;
    });

    //鼠标移入事件
    function onmouseover_hignLight(type){
        document.getElementById(type).style.fontWeight="bold";
    }
    //鼠标移出事件
    function onmouseout_hignLight(type){
        document.getElementById(type).style.fontWeight="normal";
    }


    //全站检索
    function searchInfo(){
      var key = document.getElementById("key").value;
        location.href="/search?key="+key;
    }

    //按频道检索
    function searchByModule(type){
        var key = document.getElementById("key").value;
        location.href="/search?key="+key+"&type="+type;
    }

    //按时间过滤
    function searchByTime(timetype){
        var key = document.getElementById("key").value;
        location.href="/search?key="+key+"&type=&time="+timetype;

    }



</script>
