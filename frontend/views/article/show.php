<?php
use yii\helpers\Url;
?>
<link href="/static/css/article.css" rel="stylesheet">
 <div class="blk-sm fl">
    <div class="p14-infocontent-1 b">
    <h1 class="p14-infocontent-1-tit"><?=$article->title?></h1>
    <div class="p14-infocontent-1-sour">

        <span>作者： </span>
        <span>编辑： </span>
        <span>来源： </span>

        <span>发布日期：<?php echo date("Y-m-d H:i:s", $article->create_time); ?></span>
        <!--<span>浏览次数:${data.clicks}</span>-->
    </div>
    <div class="p14-infocontent-1-text">
        <div class="p14-infocontent-1-text-t1">
            信息摘要：
        </div>
        <div class="p14-infocontent-1-text-t2"><?=$article->description?></div>
        <div class="clear">

        </div>
    </div>
    <div class="p14-infocontent-1-desc endit-content">
     <?=$article->content?>
    </div>
    <div class="clear"></div>

</div>
    <div class="p14-info-3 b">
    <div class="p14-info-3-tit">
        【相关推荐】
    </div>
    <div class="p14-info-3-list">
        <ul>
            <?php foreach ($tujianList as $article) {?>
                <li><a href="<?=Url::toRoute(['/article/show', 'id' => $article->id])?>"><span>了解详情 &gt;</span><?=$article->title?></a></li>
            <?php }?>


        </ul>
    </div>

</div>
    <div class="p14-pagination-1 b">
    <dl>
        <?php if (!empty($nextArticle)) {?>
            <dd><b><em><a href="<?=Url::toRoute(['/article/show', 'id' => $nextArticle->id])?>" title="<?=$nextArticle->title?>">查看详情 +</a></em></b><span>上一条</span><a href="<?=Url::toRoute(['/article/show', 'id' => $nextArticle->id])?>" title="<?=$nextArticle->title?>"><?=$nextArticle->title?></a>
            </dd>
        <?php } else {?>
            <dd><b><em></em></b><span style="width:100px;">没有上一条了</span></dd>
        <?php }?>
        <dt></dt>
        <?php if (!empty($beforeArticle)) {?>
            <dd><b><em><a href="<?=Url::toRoute(['/article/show', 'id' => $beforeArticle->id])?>" title="<?=$beforeArticle->title?>">查看详情 +</a></em></b><span>下一条</span><a href="<?=Url::toRoute(['/article/show', 'id' => $beforeArticle->id])?>" title="<?=$beforeArticle->title?>"><?=$beforeArticle->title?></a>
            </dd>
        <?php } else {?>
            <dd><b><em></em></b><span style="width:100px;">没有下一条了</span></dd>
        <?php }?>

    </dl>
    <div class="p14-pagination-1-href">
        <span><a href="<?=Url::to(['/article/index', 'id' => $cate->id])?>" title="返回列表">返回列表</a></span>
    </div>
    <div class="p14-pagination-1-key">
        <p>本文标签：


                    <span><a href="/helps/BoYiKangJieShao.html" title="北京博医康">北京博医康</a></span>


        </p>
    </div>
    <div class="clear">

    </div>

</div>
   </div>
   <div class="blk-xs fr">
    <div class="p14-info-2 b">
    <div class="p14-info-2-tit">推荐资讯</div>
    <div class="p14-info-2-list">
        <?php foreach ($tujianList as $article) {?>
        <dl>
            <dt><a href="<?=Url::to(['/article/show', 'id' => $article->id])?>"><img alt="<?=$article->title?>" src="/resource/images/76a991fb31d84ee5a0dd0ac40fbe53b3_3.jpg" title="<?=$article->title?>"></a></dt>
            <dd>
                <h3><a href="<?=Url::to(['/article/show', 'id' => $article->id])?>"><?=$article->title?></a></h3>
                <div class="p14-info-2-list-desc"><?=$article->description?></div>
                <div class="p14-info-2-list-date"><?php echo date("Y-m-d", $article->create_time); ?></div>
            </dd>
        </dl>
        <?php }?>



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
   <div class="clear"></div>
  </div>