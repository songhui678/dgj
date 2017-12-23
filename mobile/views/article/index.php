<?php
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\widgets\LinkPager;
?>
<link href="/mobile/css/article_list.css" rel="stylesheet">
<div>
        <div class="m4-title_nav">
            <div class="m4-t-sear1"></div>
            <a class="m4-goback" href="javascript:history.back(-1);">返回上一页</a>
            <a href="<?=Url::toRoute(['/article/index', 'id' => $cate->id])?>" id="m4-topclick"></a>
            <h2>{$cate['title']}</h2>
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
			'label' => '资讯频道',
			'url' => ['/article'],
			'template' => "{link}<span>&gt;</span>",
		],
		[
			'label' => "{$cate['title']}",
			'url' => ['/article/index', "id" => "{$cate['id']}"],
			'template' => "{link}</p>",
		],
	]]);
?>
    </div>
</div>
 <!-- 文章列表2 -->
   <div class="m4-blk blk">
    <div class="m4-nsws-list-content-2">
      <!--<h2 class="m4-title1"  th:text="${ctg?ctg.name:''}">咨询中心</h2>-->

        <div class="m4-nsws-list-content-2-con">
            <?php foreach ($articleList as $article) {?>
            <a href="<?=Url::toRoute(['/article/show', 'id' => $article->id])?>" title="<?=$article->title?>">
            <dl>
                <dt><img alt="<?=$article->title?>" src="<?=$article->photo?>" title="<?=$article->title?>"></dt>
                <dd>
                    <h3><?=$article->title?></h3>
                    <p><?=$article->description?></p>
                </dd>
            </dl>
            </a>
            <?php }?>

        </div>
        <div class="m4-page">
            <?=LinkPager::widget(['pagination' => $pages]);?>
        </div>
    </div>

</div>
  </div>