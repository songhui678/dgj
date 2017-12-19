<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\widgets\Breadcrumbs;
?>
<link href="/static/css/dingzhi.css" rel="stylesheet">
<div class="blk-main">
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
			'label' => '公司简介',
			'url' => ['/about'],
			'template' => " {link}",
		],

	]]);
?>
        </div>
    <!-- css -->
    </div>
<div class="clear"></div>
<div class="p12-aboutinfo-1">
   <div class="p12-aboutinfo-1">

   <div class="p12-aboutinfo-1-nr endit-content">
       <div class="content">

<?=$content->content?>
       </div>

   </div>

</div>
  </div>