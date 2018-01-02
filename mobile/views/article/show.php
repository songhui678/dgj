<?php
use yii\helpers\Url;
?>
<link id="headercss" href="/static/newcss/mheader.css" type="text/css" rel="stylesheet" />
<nav class="yk-nav " id="mheader_nav">
    <div class="yk-nav-box">
        <div class="yk-nav-list" id="mheader_navbox">
            <ul class="yk-nav-pills">
                              <li class="on"><a href="category.php?class_id=106104"><i class="i0"></i>新闻动态</a></li>
                    </ul>
        </div>
    </div>
</nav>
<script>
  TouchSlide({slideCell:"#sd",effect:"leftLoop",mainCell:".dsffs",vis:3});
</script>
<script src="/static/newjs/iscroll.js"></script>
<script src="/static/newjs/mheader.js"></script>
<div class="iContainer">
  <div class="wrap clearfix">
        <div class="art-box">
          <h2><?=$article->title?></h2>
          <div class="info"><span>浏览量：<?=$article->view?></span><span>时间：<?php echo date("Y-m-d", $article->create_time); ?></span></div>
      </div>
      <div class="article2" id="info_content">
            <?=$article->content?>
      </div>
    <script language="javascript">
    $(function(){
      var imgObj = $("#info_content").find("img");
      if (imgObj.length > 0)
      {
        for (var i = 0; i < imgObj.length; i++)
        {
          if (imgObj[i].width > 1140) imgObj[i].width = 1140;
        }
      }
    });
    </script>
        <ul class="up-down">
              <?php if (!empty($nextArticle)) {?>
                  <li>上一条： <a href="<?=Url::toRoute(['/article/show', 'id' => $nextArticle->id])?>" title="<?=$nextArticle->title?>"><?=$nextArticle->title?></a>
                  </li>
              <?php } else {?>
                      <li>没有上一条了</li>
              <?php }?>
              <?php if (!empty($beforeArticle)) {?>
                  <li class="noBorder">下一条： <a href="<?=Url::toRoute(['/article/show', 'id' => $beforeArticle->id])?>" title="<?=$beforeArticle->title?>"><?=$beforeArticle->title?></a>
                  </li>
              <?php } else {?>
                  <li>没有下一条了</li>
              <?php }?>
      </ul>
        </div>
</div>
