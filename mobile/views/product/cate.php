<?php
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\widgets\LinkPager;
?>
<link href="/mobile/css/product_list.css" rel="stylesheet">
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
			'label' => '产品频道',
			'url' => ['/product'],
			'template' => "{link}<span>&gt;</span>",
		],
		[
			'label' => "{$cate['title']}",
			'url' => ['/product/cate', "id" => "{$cate['id']}"],
			'template' => "{link}</p>",
		],
	]]);
?>
    </div>
</div>
<!-- 文章列表2 -->
   <div class="m4-blk blk">
    <div class="m4-nsws-list-content-2">
       <!--<h2 class="m4-title1"  th:text="${ctg?ctg.name:''}">咨询中心</em></h2>-->

        <div class="m4-nsws-list-content-2-con">
          <?php foreach ($goodsList as $goods) {?>
            <a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>"><dl>
                <dt><img alt="<?=$goods->goods_name?>" src="<?=$goods->photo?>" title="<?=$goods->goods_name?>"></dt>
                <dd>
                  <h3><?=$goods->goods_name?></h3>
                  <p><?=$goods->description?></p>
                </dd>
            </dl>
            </a>
          <?php }?>
        </div>
        <div class="m4-page">
          <?=LinkPager::widget(['pagination' => $pages]);?></a>
        </div>
    </div>
