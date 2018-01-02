


<!doctype html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="webkit" name="renderer">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta content="portrait" name="screen-orientation"> <!-- uc强制竖屏 -->
<meta content="portrait" name="x5-orientation"><!-- QQ强制竖屏 -->
<title>企业简介 - 关于我们 - 美菱生物医疗</title>
<meta name="keywords" content="超低温冰箱,医用冷藏箱,实验室超低温冰箱,血液冷藏箱,医用低温冰箱,-80℃超低温冰箱,美菱药品保存箱,智能生物样本库" />
<meta name="description" content="美菱生物医疗主营低温,超低温存储设备,耗材及生物样本冻存管理,无线智能云监控,冷链仓储物流系统解决方案,家庭健康等业务,广泛应用于医疗,基因工程,生命科学等领域.欢迎来电咨询:4008600266" />
<link href="css/style.css" type="text/css" rel="stylesheet">
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/TouchSlide.1.1.js"></script>
<script type="text/javascript" src="js/morecity.js" mce_src="js/morecity.js"></script>
</head>
<body>

<div class="top">
    <h1 class="logo">
                <a href="index.php"><img _src="/upload/2017-03/148973541384950300.jpg" src="/upload/2017-03/148973541384950300.jpg" alt="手机站logo"></a></a>

    </h1>
    <div class="navbtn"><img src="images/navbtn.jpg"></div>
    <div class="subnav-wrap">
        <div class="subnav">
            <ul>
                <li><a href="index.php">首页</a>
                <div class="navicon"><img src="images/nav_icon.png"> </div>
                </li>
                <li><a href="category.php?class_id=101">关于我们</a><div class="navicon"><img src="images/nav_icon.png"> </div></li>
                <li><a href="category.php?class_id=102">产品中心</a><div class="navicon"><img src="images/nav_icon.png"> </div></li>
                <li><a href="category.php?class_id=103">解决方案</a><div class="navicon"><img src="images/nav_icon.png"> </div></li>
                <li><a href="category.php?class_id=109">招商加盟</a><div class="navicon"><img src="images/nav_icon.png"> </div></li>
                <li><a href="category.php?class_id=104">客服服务</a><div class="navicon"><img src="images/nav_icon.png"> </div></li>
                <li><a href="http://zkmeiling.com/category.php?class_id=105">合作案例</a><div class="navicon"><img src="images/nav_icon.png"> </div></li>
                <li><a href="category.php?class_id=106">新闻中心</a><div class="navicon"><img src="images/nav_icon.png"> </div></li>
                <li><a href="category.php?class_id=111">人力资源</a><div class="navicon"><img src="images/nav_icon.png"> </div></li>
                <li><a href="category.php?class_id=107">联系我们</a><div class="navicon"><img src="images/nav_icon.png"> </div>
                </li>
             </ul>
            <p class="navtop"><img src="images/navtop.png"></p>
        </div>
    </div>
    <script type="text/javascript">
        $(function(){
        　　$(".navbtn, .menubtn a").click(function(){
        　　　　$(".subnav-wrap").slideDown();
        　　});
            $(".navtop").click(function(){
        　　　　$(".subnav-wrap").slideUp();
        　　});
        });
    </script>
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