<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<link href="/static/css/article_list.css" rel="stylesheet">
<div class="blk-xs fl">
    <div class="p14-left-nav-1 b">
 <div class="p14-left-nav-1-tit">
  <h3>资讯中心<span>/information</span></h3>
 </div>
 <div class="p14-left-nav-1-nav" navvicefocus1="">
    <?php if (!empty($cateList)): ?>
        <?php foreach ($cateList as $data): ?>
           <div class="p14-left-nav-1-nav-one">
            <h3>
            <a href="<?=Url::to(['/article/index', 'id' => $data->id])?>"><?=$data->title?></a>
            </h3>
           </div>
       <?php endforeach;?>
   <?php endif;?>
 </div>
 <div class="clear"></div>
</div>
    <div>
    <div class="contact-z1">
        <p>咨询热线</p>
        <span>010-68173889</span>
    </div>

</div>
   </div>
   <div class="blk-sm fr">
    <div class="p14-infolist-1 b">
    <?php if (!empty($toutiaoArticle)) {?>
    <div class="p14-infolist-1-t1">
        <dl>
            <dt><a href="<?=Url::toRoute(['/article/show', 'id' => $toutiaoArticle->id])?>" title="<?=$toutiaoArticle->title?>"><?=$toutiaoArticle->title?></a><span>头条</span></dt>
            <dd>
                <div class="p14-infolist-1-t1-desc">
                        <?=$toutiaoArticle->description?>
                </div>
                <div class="p14-infolist-1-t1-deta">
                    <a href="<?=Url::toRoute(['/article/show', 'id' => $toutiaoArticle->id])?>" title="<?=$toutiaoArticle->title?>">详情</a>
                </div>
            </dd>
        </dl>
    </div>
    <?php }?>

    <div class="p14-infolist-1-list">


    <?php foreach ($articleList as $article) {?>
        <dl>
            <dt><a href="<?=Url::toRoute(['/article/show', 'id' => $article->id])?>"><img alt="<?=$article->title?>" src="/resource/images/da9bc071970949ef9d429ca3e4d0506a_57.png" title="<?=$article->title?>"></a></dt>
            <dd>
                <h4><a href="<?=Url::toRoute(['/article/show', 'id' => $article->id])?>" title="<?=$article->title?>"><?=$article->title?></a></h4>
                <div class="p14-infolist-1-list-desc"><?=$article->description?></div>
                <div class="p14-infolist-1-list-deta">
                    <a href="<?=Url::toRoute(['/article/show', 'id' => $article->id])?>" title="<?=$article->title?>">了解详情</a>
                </div>
            </dd>
        </dl>
    <?php }?>

    </div>
    <div class="clear"></div>

</div>

    <div class="p12-pagination-1 g">
        <div class="p12-pagination-1-main">
            <?=LinkPager::widget(['pagination' => $pages]);?>
        </div>
        <div class="clear"></div>
    </div>
   </div>
   <div class="clear"></div>
  </div>