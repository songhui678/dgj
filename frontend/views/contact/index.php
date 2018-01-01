<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\widgets\Breadcrumbs;
?>
<div class="container hhh">
    <div class="wrap clearfix">
        <div class="main">
        <div class="location">
            <?php echo Breadcrumbs::widget(['homeLink' => [
	'label' => '首页',
	'url' => ['/'],
	'template' => "<img src='/static/newimage/home.jpg'>{link}<span>&gt;</span>",
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

                    <div class="back-color">
                    <div class="contact-wrap">
                        <div class="contact clearfix">
                            <div class="map">
                            <img src="/upload/2017-03/149034579505389900.jpg" width="584" height="287">
                            </div>
                            <div class="info">
                                <p>
    <strong>中科美菱低温科技股份有限公司服务热线：4008-600-266转3</strong>
</p>
<p>
    销售服务：(086)551-62219671
</p>
<p>
    监督热线：(086)551-64413458
</p>
<p>
    传　　真：(086)551-62219667
</p>
<p>
    地　　址：中国·安徽省合肥市经济技术开发区紫石路1862号
</p>                            </div>
                        </div>
                    </div>



                    <div class="cpxq">
                        <div class="tit">
                            <h2><span>推荐产品</span></h2>
                        </div>
                        <div class="xq-item-wrap clearfix">
                                                        <div class="xq-item noMg">
                                <div class="pic"><a href="pdisplay.php?id=207" title="超低温冷冻储存箱DW-HL1008"><img src="/upload/2017-03/148834817197966600.jpg" width="264" height="187" alt="超低温冷冻储存箱DW-HL1008"> </a></div>
                                <div class="name">
                                    超低温冷冻储存箱DW-HL1008                                   <div class="kuan" date-id="207"></div>
                                </div>
                            </div>

                        </div>
                        <script type="text/javascript">
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
</div>
