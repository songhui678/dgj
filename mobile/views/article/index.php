<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<link id="headercss" href="/static/newcss/mheader.css" type="text/css" rel="stylesheet" />
<nav class="yk-nav " id="mheader_nav">
    <div class="yk-nav-box">
        <div class="yk-nav-list" id="mheader_navbox">
            <ul class="yk-nav-pills">
                <li class="on"><a href="<?=Url::toRoute(['/article'])?>"><i class="i0"></i>新闻动态</a></li>
                            </ul>
        </div>
    </div>
</nav>
<script>
    TouchSlide({slideCell:"#sd",effect:"leftLoop",mainCell:".dsffs",vis:3});
</script>
<script src="/static/newjs/iscroll.js"></script>
<script src="/static/newjs/mheader.js"></script><style type="text/css">

    .list-bj{width: 60px; height: 60px; border: 1px solid #ccc; text-align: center; line-height: 60px; font-size: 60px; font-family: "楷体"; font-weight: bold; color: #000000; _line-height:60px; *line-height:70px; line-height: 70px\9; margin-right:10px; }

    .area ul li:hover .list-bj{border: 1px solid #1653A3; color: #1653A3;}

    .area ul li:hover{border-bottom: 1px solid #1653A3; }

    .area ul{border-bottom: 1px solid #fff;}

</style>
<div class="iContainer">
    <div class="wrap clearfix">
        <div class="main">
                        <div class="inews">
                <div class="news-item-wrap clearfix">
                <?php foreach ($articleList as $key => $article) {
	?>
                <div class="news-item <?php if ($key % 2 != 0) {?>
		 "bg-color";
	<?php }?>">
                    <h2><a href="<?=Url::toRoute(['/article/show', 'id' => $article->id])?>"><?=$article->title?></a> </h2>
                    <div class="txt"><?=$article->description?>
                    </div>
                    <p class="more"><a href="<?=Url::toRoute(['/article/show', 'id' => $article->id])?>">查看更多 &gt;</a> </p>
                </div>
                <?php }?>



                                    </div>
            </div>
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
