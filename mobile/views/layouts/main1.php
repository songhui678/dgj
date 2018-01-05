<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\helpers\Url;
$this->beginPage();
?>

<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="webkit" name="renderer">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta content="portrait" name="screen-orientation"> <!-- uc强制竖屏 -->
<meta content="portrait" name="x5-orientation"><!-- QQ强制竖屏 -->
<title><?=Html::encode($this->title)?></title>
<meta name="description" content="<?php echo isset($this->metaTags['description']) ? $this->metaTags['description'] : ''; ?>" />
<meta name="keywords" content="<?php echo isset($this->metaTags['keywords']) ? $this->metaTags['keywords'] : ''; ?>" />
<link href="/static/newcss/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/static/newjs/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/static/newjs/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/static/newjs/TouchSlide.1.1.js"></script>
</head>
<body>
<div class="top">
    <h1 class="logo">
        <a href="<?=Url::toRoute('/')?>"><img _src="/static/images/logo1.png" src="/static/images/logo.png" alt="新默真科技"></a>
    </h1>
    <div class="navbtn"><img src="/static/images/navbtn.jpg"></div>
    <?php $this->beginContent('@app/views/layouts/public/menu.php')?>
    <?php $this->endContent()?>
</div>
   <?=$content?>
</div>
  </div>

    <!-- BEGIN FOOTER -->
    <?php $this->beginContent('@app/views/layouts/public/footer.php')?>
    <?php $this->endContent()?>

    <?php $this->endBody()?>
    </body>

</html>
<?php $this->endPage()?>