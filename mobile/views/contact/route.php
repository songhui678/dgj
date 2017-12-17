
<link href="/mobile/css/route.css" rel="stylesheet">
<!-- 文章列表2 -->
   <div>
    <!-- 区块 -->
    <section class="info-content-5-map">
        <div id="allmap"></div>
        <!--<div class="info-content-5-map-info">-->
        <!--    <div class="info-content-5-map-info-right">-->
        <!--        <a href="/mobile/Tools/route.html">查看路线</a>-->
        <!--    </div>-->
        <!--    <div class="info-content-5-map-info-left" th:text="${enterprise.address}"></div>-->
        <!--</div>-->
    </section>

    <script type="text/javascript">
        /*<![CDATA[*/
        // 百度地图API功能
        // 创建Map实例
        $(function(){
            var interval2 = setInterval(function () {
                if (BMap) {
                    clearInterval(interval2);
                } else {
                    return;
                }
                var jwaddress = {};

                jwaddress.j = 116.205002; jwaddress.w = 39.92038;
                var straddress = 北京市石景山区八角西街61号;
                var shortName=新默真科技（北京）有限公司;
                var addInfo ='<div class="font-left"><h5>'+shortName+'</h5><p>'+ 北京市石景山区八角西街61号+'</p></div><div class="font-right"><a href="/index/route">去这里</a></div>';
                // var addInfo='<a href="/mobile/Tools/route.html">到这里</a>';
                var map = new BMap.Map("allmap"); // 创建Map实例
                var point = new BMap.Point(116.205002,39.92038);

                if (jwaddress.j && jwaddress.w) {

                    point = new BMap.Point(jwaddress.j, jwaddress.w);
                    map.centerAndZoom(point, 18);
                    map.addOverlay(new BMap.Marker(point));
                    //添加信息窗口
                    var opts = {
                      width : 200,     // 信息窗口宽度
                      height: 40,     // 信息窗口高度
                      //title : '' , // 信息窗口标题
                      enableCloseOnClick:false
                    }
                    var infoWindow = new BMap.InfoWindow(addInfo, opts);  // 创建信息窗口对象
                    map.openInfoWindow(infoWindow,point); //开启信息窗口
                } else {

                    var myGeo = new BMap.Geocoder();
                    // 将地址解析结果显示在地图上,并调整地图视野
                    myGeo.getPoint(straddress, function(point) {
                        if (point) {
                            map.centerAndZoom(point, 18);
                            map.addOverlay(new BMap.Marker(point));
                            //添加信息窗口
                            var opts = {
                              width : 200,     // 信息窗口宽度
                              height: 40,     // 信息窗口高度
                              //title : shortName , // 信息窗口标题
                              enableCloseOnClick:false
                            }
                            var infoWindow = new BMap.InfoWindow(addInfo, opts);  // 创建信息窗口对象
                            map.openInfoWindow(infoWindow,point); //开启信息窗口

                        } else {
                            alert("您的地址没有解析到结果，可以手动定位到您的的公司地址，谢谢");
                            map.centerAndZoom(new BMap.Point(116.417854, 39.921988), 18);
                        }
                    }, '深圳市');


                }

                //开启鼠标滚轮缩放
                map.enableScrollWheelZoom(true);

                //添加地图类型控件
                map.addControl(new BMap.MapTypeControl());



                /*
                    *主要参数：
                    1，初始化地址经纬度；
                    2，创建地址标注，以及地址信息：title，info。
                    3，
                */
                /*>*/

            }, 60);
        })

    </script>

</div>
  </div>