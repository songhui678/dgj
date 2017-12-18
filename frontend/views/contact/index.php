<link href="/static/css/dingzhi.css" rel="stylesheet">
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
			'label' => '联系我们',
			'url' => ['/contact'],
			'template' => " {link}",
		],

	]]);
?>

        </div>
    <!-- css -->
    </div>
<div class="clear"></div>

   <div class="p12-aboutinfo-1">

   <div class="p12-aboutinfo-1-nr endit-content">
       <style>
    .lx {
        background: none repeat scroll 0 0;
        border: 1px solid #eaeaea;
        font-size: 16px;
        line-height: 1.7;
        margin: 15px 0 30px;
        padding: 48px 42px 38px;
    }

    .lx .ybx {
        border-right: 1px solid #dadada;
    }
</style>
<div class="lx">
    <div>
        <div class="tableScrolling" style="margin:0;padding:0;display:block;overflow-x:auto;-webkit-overflow-scrolling:touch;">
            <table border="0" cellpadding="0" cellspacing="0" class="ke-zeroborder" width="100%">
                <tbody>
                    <tr>
                        <td class="ybx " style="padding-right:40px;" width="350">
                            <p style="float:left;">
                                <img align="" alt="博医康" height="140" src="/resource/images/29ce693571db49299a74457a6f85b0c0_68.jpg" title="博医康" width="140">
                            </p>
                            <p style="font-size:34px;margin:0px;line-height:50px;padding-top:18px;font-weight:bold;">
                                联系博医康
                            </p>
                            <p style="font-size:16px;margin:0px;font-weight:;">
                                全国统一服务咨询热线：
                            </p>
                            <p style="font-size:26px;margin:0px;line-height:24px;font-weight:bold;">
                                010-51656110
                            </p>
                        </td>
                        <td rowspan="2" width="62">
                            <br>
                        </td>
                        <td rowspan="2">
                            <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
                            <meta name="keywords" content="百度地图,百度地图API，百度地图自定义工具，百度地图所见即所得工具">
                            <meta name="description" content="百度地图API自定义地图，帮助用户在可视化操作下生成百度地图">
<link rel="alternate" media="only screen and (max-width:640px)" href="http://www.boyikang.com/mobile/helps/LianXiFangShi.html">
<script src="/js/uaredirect.js" type="text/javascript"></script>
<script type="text/javascript">uaredirect('http://www.boyikang.com/mobile/helps/LianXiFangShi.html');</script>
                            <meta http-equiv="pragma" content="no-cache">
 <meta http-equiv="cache-control" content="no-cache,must-revalidate">
 <meta http-equiv="expires" content="Wed, 26 Feb 1997 08:21:57 GMT">
 <meta http-equiv="expires" content="0">
 <title>
                                百度地图API自定义地图
                            </title>
                            <!--引用百度地图API-->
                            <style type="text/css">
                                html,
                                body {
                                    margin: 0;
                                    padding: 0;
                                }

                                .iw_poi_title {
                                    color: #CC5522;
                                    font-size: 14px;
                                    font-weight: bold;
                                    overflow: hidden;
                                    padding-right: 13px;
                                    white-space: nowrap
                                }

                                .iw_poi_content {
                                    font: 12px arial, sans-serif;
                                    overflow: visible;
                                    padding-top: 4px;
                                    white-space: -moz-pre-wrap;
                                    word-wrap: break-word
                                }
                            </style>
                            <script src="http://api.map.baidu.com/api?key=&amp;v=1.1&amp;services=true" type="text/javascript"></script>
                            <!--百度地图容器-->
                            <div id="dituContent" style="width:661px;height:351px;border:#ccc solid 1px;">
                            </div>
                            <script type="text/javascript">
                                //创建和初始化地图函数：
                                function initMap() {
                                    createMap(); //创建地图
                                    setMapEvent(); //设置地图事件
                                    addMapControl(); //向地图添加控件
                                    addMarker(); //向地图中添加marker
                                }

                                //创建地图函数：
                                function createMap() {
                                    var map = new BMap.Map("dituContent"); //在百度地图容器中创建一个地图
                                    var point = new BMap.Point(116.134023, 39.724446); //定义一个中心点坐标
                                    map.centerAndZoom(point, 17); //设定地图的中心点和坐标并将地图显示在地图容器中
                                    window.map = map; //将map变量存储在全局
                                }

                                //地图事件设置函数：
                                function setMapEvent() {
                                    map.enableDragging(); //启用地图拖拽事件，默认启用(可不写)
                                    map.enableScrollWheelZoom(); //启用地图滚轮放大缩小
                                    map.enableDoubleClickZoom(); //启用鼠标双击放大，默认启用(可不写)
                                    map.enableKeyboard(); //启用键盘上下左右键移动地图
                                }

                                //地图控件添加函数：
                                function addMapControl() {
                                    //向地图中添加缩放控件
                                    var ctrl_nav = new BMap.NavigationControl({
                                        anchor: BMAP_ANCHOR_TOP_LEFT,
                                        type: BMAP_NAVIGATION_CONTROL_LARGE
                                    });
                                    map.addControl(ctrl_nav);
                                    //向地图中添加缩略图控件
                                    var ctrl_ove = new BMap.OverviewMapControl({
                                        anchor: BMAP_ANCHOR_BOTTOM_RIGHT,
                                        isOpen: 0
                                    });
                                    map.addControl(ctrl_ove);
                                    //向地图中添加比例尺控件
                                    var ctrl_sca = new BMap.ScaleControl({
                                        anchor: BMAP_ANCHOR_BOTTOM_LEFT
                                    });
                                    map.addControl(ctrl_sca);
                                }

                                //标注点数组
                                var markerArr = [{
                                    title: "北京博医康实验仪器有限公司",
                                    content: "联系电话：010-51656110<br/><br/>手机：18610045012<br/><br/>传真：010-68233815<br/><br/>E-mail：sale@boyikang.com<br/><br/>地址：北京房山区良乡工业开发区建设路20号",
                                    point: "116.13326|39.723593",
                                    isOpen: 0,
                                    icon: {
                                        w: 21,
                                        h: 21,
                                        l: 0,
                                        t: 0,
                                        x: 6,
                                        lb: 5
                                    }
                                }];
                                //创建marker
                                function addMarker() {
                                    for (var i = 0; i < markerArr.length; i++) {
                                        var json = markerArr[i];
                                        var p0 = json.point.split("|")[0];
                                        var p1 = json.point.split("|")[1];
                                        var point = new BMap.Point(p0, p1);
                                        var iconImg = createIcon(json.icon);
                                        var marker = new BMap.Marker(point, {
                                            icon: iconImg
                                        });
                                        var iw = createInfoWindow(i);
                                        var label = new BMap.Label(json.title, {
                                            "offset": new BMap.Size(json.icon.lb - json.icon.x + 10, -20)
                                        });
                                        marker.setLabel(label);
                                        map.addOverlay(marker);
                                        label.setStyle({
                                            borderColor: "#808080",
                                            color: "#333",
                                            cursor: "pointer"
                                        });

                                        (function() {
                                            var index = i;
                                            var _iw = createInfoWindow(i);
                                            var _marker = marker;
                                            _marker.addEventListener("click", function() {
                                                this.openInfoWindow(_iw);
                                            });
                                            _iw.addEventListener("open", function() {
                                                _marker.getLabel().hide();
                                            })
                                            _iw.addEventListener("close", function() {
                                                _marker.getLabel().show();
                                            })
                                            label.addEventListener("click", function() {
                                                _marker.openInfoWindow(_iw);
                                            })
                                            if (!!json.isOpen) {
                                                label.hide();
                                                _marker.openInfoWindow(_iw);
                                            }
                                        })()
                                    }
                                }
                                //创建InfoWindow
                                function createInfoWindow(i) {
                                    var json = markerArr[i];
                                    var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>" + json.content + "</div>");
                                    return iw;
                                }
                                //创建一个Icon
                                function createIcon(json) {
                                    var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w, json.h), {
                                        imageOffset: new BMap.Size(-json.l, -json.t),
                                        infoWindowOffset: new BMap.Size(json.lb + 5, 1),
                                        offset: new BMap.Size(json.x, json.h)
                                    })
                                    return icon;
                                }

                                initMap(); //创建和初始化地图
                            </script>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                <b>北京博医康实验仪器有限公司</b>
                            </p>
                            <p>
                                联系电话：010-51656110
                            </p>
                            <p>
                                手机：18610045012
                            </p>
                            <p>
                                传真：010-68233815
                            </p>
                            <p>
                                E-mail：sale@boyikang.com
                            </p>
                            <p>
                                地址：北京房山区良乡工业开发区建设路20号
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p>
            <br>
        </p>
    </div>
</div>
<div class="clear">
</div>
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