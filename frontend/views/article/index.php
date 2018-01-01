<?php
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\widgets\LinkPager;
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
			'label' => '新闻中心',
			'url' => ['/article'],
			'template' => "{link}<span>&gt;</span>",
		],
		[
			'label' => "{$cate['title']}",
			'url' => ['/article/index', "id" => "{$cate['id']}"],
			'template' => "{link}",
		],
	]]);
?>
                        </div>

            <div class="news-item-wrap clearfix ">
            <?php foreach ($articleList as $article) {?>
                    <div class="news-item noMg">
                        <div class="pic"><a href="<?=Url::toRoute(['/article/show', 'id' => $article->id])?>" title="<?=$article->title?>" target="_blank"><img src="<?=$article->photo?>" width="360" height="225" /></a></div>
                        <dl>
                        <dt><a href="<?=Url::toRoute(['/article/show', 'id' => $article->id])?>" title="<?=$article->title?>"><?=$article->title?></a></dt>
                        <dd>
                        <?=$article->description?>
                        </dd>
                            <dd class="info">
                                <span><img src="images/i_icon_scan.jpg"><em><?=$article->view?></em> </span>
                                <span><img src="images/i_icon_time.jpg"><em><?php echo date("Y-m-d H:i:s", $article->create_time); ?></em> </span>
                                <span><img src="images/i_icon_pen.jpg"><em>新默真科技</em> </span>
                            </dd>
                        </dl>
                    </div>
                     <?php }?>


    </div>
            <script type="text/javascript">
                $(".job-item .tit").click(function(){
                    var this_par = $(this).parent();
                    if(this_par.hasClass("job-cur")){
                        this_par.removeClass("job-cur");
                    }else{
                        this_par.addClass("job-cur");
                        this_par.siblings().removeClass("job-cur");
                    }
                });
            </script>
            <div class="page">
                <?=LinkPager::widget([
	'pagination' => $pages,
	'firstPageLabel' => '首页',
	'lastPageLabel' => '尾页',
	'maxButtonCount' => 5,
]);?>

            </div>
          </div>
    </div>
</div>
