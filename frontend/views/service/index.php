<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\widgets\Breadcrumbs;
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
			'label' => '解决方案',
			'url' => ['/custom'],
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
