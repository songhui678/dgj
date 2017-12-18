<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
$this->beginPage();
?>
<!DOCTYPE html><html lang="zh"><head data-base="/mobile/">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="wap-font-scale" content="no">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache,must-revalidate">
<meta http-equiv="expires" content="Wed, 26 Feb 1997 08:21:57 GMT">
<meta http-equiv="expires" content="0">
 <title><?=Html::encode($this->title)?></title>
<meta name="description" content="<?php echo isset($this->metaTags['description']) ? $this->metaTags['description'] : ''; ?>" />
<meta name="keywords" content="<?php echo isset($this->metaTags['keywords']) ? $this->metaTags['keywords'] : ''; ?>" />
<link rel="canonical" href="http://www.boyikang.com/helps/LianXiFangShi.html">
<link href="/mobile/css/reset.css" rel="stylesheet">
<link href="/mobile/css/swiper-3.3.1.min.css" rel="stylesheet">
<link href="/mobile/css/contact.css" rel="stylesheet">
<script src="/mobile/js/jquery-1.10.1.min.js"></script>
<script src="/mobile/js/swiper-3.3.1.jquery.min.js"></script>
<script src="/mobile/js/laypage.js"></script>
<script src="/mobile/js/template-sub-domain.js"></script>
</head>
 <body>
<!-- 主体 -->
<div class="blk-main">
<!-- 标题栏 -->
<div class="blk">
<header class="g-hd">
<p class="tod">010-51656110 </p>
<h1><a href="/mobile/"><img src="/mobile/Skins/Default/Img/Common/logo.jpg" title="博医康"></a>
</h1>
<p class="toz">专业<span>冻干设备+解决方案</span>提供商</p>

</header>

<div>
        <div class="m4-title_nav">
            <div class="m4-t-sear1"></div>
            <a class="m4-goback" href="javascript:history.back(-1);">返回上一页</a>
            <a href="/mobile/help/category.html" id="m4-topclick"></a>
            <h2>联系方式</h2>
        </div>

    </div>
    <!-- 搜索模块 -->
    <div class="m4-t-sear2">
        <div class="m4-t-sear2-txt">
            <p>取消</p>
            <div class="m4-t-sear2-inp">
                <input class="m4-t-sear2-inp-text" id="key" type="text">
                <span class="m4-t-sear2-inp-but"><input onkeydown="keydown();" type="button"></span>
            </div>
        </div>
    </div>
</div>


 <?=$content?>

</div>
  </div>
      <!-- END FOOTER -->
    <?php $this->beginContent('@app/views/layouts/public/side.php')?>
    <?php $this->endContent()?>
    <!-- BEGIN FOOTER -->
    <?php $this->beginContent('@app/views/layouts/public/footer.php')?>
    <?php $this->endContent()?>

    <?php $this->endBody()?>
    </body>

</html>
<?php $this->endPage()?>