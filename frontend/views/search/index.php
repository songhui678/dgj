<?php
use yii\widgets\Breadcrumbs;
?>
<link href="/static/css/search.css" rel="stylesheet">
<div class="blk-main clearafter">
   <div class="blk-md">
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
			'label' => '全站搜索',
			'url' => ['/search'],
			'template' => " {link}",
		],

	]]);
?>
    </div>
    <!-- css -->
</div>
        <div class="blk-main">
            <div class="xnznr-search-1-tit tit-md"><h3>搜索结果</h3></div>
            <div class="xnznr-search-1-main">
                    <?php foreach ($goodsList as $goods) {?>
                       <dl>
                              <dt><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>"><img src="<?=$goods->photo?>" ></a></dt>
                              <dd>
                               <h4><a class="t1-article-link" href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>"><?=$goods->goods_name?></a></h4>
                               <div class="xnznr-search-1-desc">
                                <?=$goods->description?>
                               </div>
                           </dd>
                       </dl>
                    <?php }?>




                        </div>
              <div class="clear"></div>
              <div class="xnznr-page-main"></div>
              <div id="saveid">
                <?=LinkPager::widget(['pagination' => $pages]);?>
              </div>
        </div>
<style>
            .xnznr-page{text-align: center;margin-top: 25px;}
            .xnznr-page a{display:inline-block;width: 30px;height: 30px;line-height: 30px; text-align: center;border:1px solid #aaa;vertical-align: middle;margin-right: 4px;}
            .xnznr-page a.cur{color: #fff;background: #124a62;border: 1px solid #124a62;}
            .xnznr-page a img{display: block;}
            .xnznr-search-1-tit{border-bottom: 1px solid #ccc;}
            .xnznr-search-1-tit h3{width: 145px;height: 46px;text-align: center;line-height: 46px;background: #333;color: #fff;font-weight: normal;position: relative;top: 1px;font-size:24px;}
            .xnznr-search-1-main dl{padding: 23px 0;clear: both;border-bottom: 1px solid #cbcbcb;display: inline-block;width: 100%;}
            .xnznr-search-1-main dt{width: 18%;padding-right: 23px;float: left;}
            .xnznr-search-1-main dt img{width: 100%;}
            .xnznr-search-1-main dd{float: left;width: 79%;}
            .xnznr-search-1-main dd h4{font-size: 18px;font-weight: normal;}
            .xnznr-search-1-main dd h4 span{color: #f00;}
            .xnznr-search-1-desc{line-height: 30px;height: 60px;padding-top: 8px;overflow: hidden;}


             .xnznr-page-main {
                text-align: center;
                margin-top: 25px;
            }

            .xnznr-page-main a,.xnznr-page-main span {
                display: inline-block;
                width: 30px;
                height: 30px;
                line-height: 30px;
                text-align: center;
                border: 1px solid #aaa;
                vertical-align: middle;
                margin-right: 4px;
            }
            .xnznr-page-main .laypage_curr {
                color: #fff;
                background: #666;
                border: 1px solid #666;
            }

            .xnznr-page-main a img {
                display: block;
            }
            </style>


   </div>
  </div>