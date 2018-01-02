<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;
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
                            <?=$content->content?>

                        </div>
                    </div>



                    <div class="cpxq">
                        <div class="tit">
                            <h2><span>推荐产品</span></h2>
                        </div>
                        <div class="xq-item-wrap clearfix">
                        <?php foreach ($goodsList as $google) {?>
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
