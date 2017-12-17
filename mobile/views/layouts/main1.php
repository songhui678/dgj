<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\helpers\Url;
$this->beginPage();
?>

<!DOCTYPE html><html lang="zh"><head data-base="/mobile/">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no;">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="pragma" content="no-cache">
 <meta http-equiv="cache-control" content="no-cache,must-revalidate">
 <meta http-equiv="expires" content="Wed, 26 Feb 1997 08:21:57 GMT">
 <meta http-equiv="expires" content="0">
<title><?=Html::encode($this->title)?></title>
<meta name="description" content="<?php echo isset($this->metaTags['description']) ? $this->metaTags['description'] : ''; ?>" />
<meta name="keywords" content="<?php echo isset($this->metaTags['keywords']) ? $this->metaTags['keywords'] : ''; ?>" />

  <link rel="canonical" href="http://www.nmgen.com/">

  <link href="/mobile/css/index.css" rel="stylesheet" type="text/css">
  <link href="/mobile/css/shouye.css" rel="stylesheet">

 <script src="/mobile/js/template-sub-domain.js"></script></head>

 <body>
  <div class="wrap">
   <!--box-->
   <!--头部-->
   <header class="g-hd">
 <p class="tod">010-51656110  </p>
 <h1><a href="/mobile/"><img src="/mobile/Skins/Default/Img/Common/logo.jpg" title="博医康"></a></h1>
 <p class="toz">专业<span>冻干设备+解决方案</span>提供商</p>

</header>
   <!--内容-->
   <section class="g-bd">
    <div class="banner j-slide-auto">
 <ul class="m-box">

   <li><a href="/mobile/product/ZhenKongLingDongGan.html"><img alt="博医康" src="/mobile/resource/images/049dfbb4519641c188b4f57b8b67bbfa_8.jpg"></a></li>

 </ul>
</div>

    <div class="zs">

<ul>
  <li class="cur">
    <a href="<?=Url::toRoute('/product')?>" title="真空冷冻干燥机">真空冷冻干燥机</a>
  </li>
  <li>
      <a href="/product/CengXiShiYanLing.html" title="层析实验冷柜">层析实验冷柜</a>
  </li>
  <li>
      <a href="<?=Url::toRoute('/custom')?>" title="冻干机定制">冻干机定制</a>
  </li>
  <li>
      <a href="<?=Url::toRoute('/support')?>" title="技术服务">技术服务</a>
  </li>
  <li>
      <a href="<?=Url::toRoute(['/article'])?>" title="案例资讯">案例资讯</a>
  </li>
  <li>
      <a href="<?=Url::toRoute('/contact')?>" title="联系我们">联系我们</a>
  </li>
</ul>

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