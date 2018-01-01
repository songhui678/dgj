<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
?>
<div class="banner">
    <div class="bd">
        <ul>
        <?php foreach ($adverList as $adver) {?>
            <li><a href="<?=Url::toRoute([$adver->url])?>" target="_blank" title="<?=$adver->title?>"><img src="<?=$adver->photo?>" alt="<?=$adver->title?>" width="1920" height="664" ></a>
            </li>
        <?php }?>
        </ul>
    </div>
    <div class="hd">
        <ul></ul>
    </div>
    <p class="aPrev"><img src="/static/newimage/aPrev.png"></p>
    <p class="aNext"><img src="/static/newimage/aNext.png"></p>
</div>
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
			'label' => '关于我们',
			'url' => ['/about'],
			'template' => " {link}",
		],

	]]);
?>

            </div>
       <div class="article clearfix" id="info_content">


              <?=$content->content?>
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
                  </div>
  </div>
</div>
