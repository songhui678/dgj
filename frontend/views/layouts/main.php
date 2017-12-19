<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
$this->beginPage();
?>

<!DOCTYPE html>
<html lang="zh" xmlns="http://www.w3.org/1999/xhtml">
<head data-base="/">
<meta name="baidu-site-verification" content="JxTRMxGj4c">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache,must-revalidate">
<meta http-equiv="expires" content="Wed, 26 Feb 1997 08:21:57 GMT">
<meta http-equiv="expires" content="0">
<title><?=Html::encode($this->title) . "-新默真科技"?></title>
<meta name="keywords" content="冻干机,冷干机,冷冻干燥机,真空冷冻干燥机,新默真科技">
<meta name="description" content="北京新默真科技实验仪器有限公司是一家专业真空冷冻干燥机及解决方案提供商，为客户提供从实验室型、中试型冻干机设备以及完整的真空冷冻解决方案。联系电话：010-51620600">

<link href="/static/css/n-reset.css" rel="stylesheet">
<!-- <link href="static/css/Index.css" rel="stylesheet"> -->
<!-- <link href="static/css/58e5bd1aac30899558b844f3.css" rel="stylesheet"> -->

<script language="javascript" type="text/javascript" src="/static/scripts/uaredirect.js"></script>
<script language="javascript" type="text/javascript" src="/static/scripts/nsw.pc.min.js"></script>
<script language="javascript" type="text/javascript" src="/static/scripts/template-sub-domain.js"></script>
<script language="javascript" type="text/javascript" src="/static/scripts/product.js"></script>
<script type="text/javascript">uaredirect('http://m.dgj.com/');</script>
<link rel="shortcut icon" href="/favicon.ico" />

<link rel="alternate" media="only screen and (max-width:640px)" href="http://m.nmgen.com.cn">
<body>
<?php $this->beginBody()?>
<!--头部-->
<div class="head">
<div class="header">
  <div class="tok">
   <h1><a href="/" title="新默真科技"><img alt="新默真科技" src="/static/images/logo.png"></a> </h1>
   <h2>专业<span>冻干设备+解决方案</span>提供商</h2>
   <p class="tod">
       <!--
       <span>
        <a href="#" target="_blank" title="英文切入窗口">英文切入窗口</a>
       </span>
        -->
       <em>010-51656110 / 010-51620600</em>
   </p>
  </div>
  <div class="nav menu">
        <?php $this->beginContent('@app/views/layouts/public/menu.php')?>
        <?php $this->endContent()?>
  </div>
 </div>

</div>
<div class="ty-banner-1">
        <a href="/helps/BoYiKangJieShao.html" title="冻干机定制">
            <img alt="冻干机定制" src="/resource/images/64f483789fa745b1b622fafefbe7b650_3.jpg" title="冻干机定制">
        </a>
</div>


 <?=$content?>

</div>
  </div>


        <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <?php $this->beginContent('@app/views/layouts/public/footer.php')?>
    <?php $this->endContent()?>
    <!-- END FOOTER -->
    <?php $this->beginContent('@app/views/layouts/public/side.php')?>
    <?php $this->endContent()?>
    <?php $this->endBody()?>
    </body>

</html>
<?php $this->endPage()?>