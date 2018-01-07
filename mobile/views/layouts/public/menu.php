<?php
use yii\helpers\Url;
?>
    <div class="subnav-wrap">
        <div class="subnav">
            <ul>
                <li><a href="<?=Url::toRoute('/')?>">首页</a>
                <div class="navicon"><img src="/static/images/nav_icon.png"> </div>
                </li>
                <li><a href="<?=Url::toRoute('/about')?>">关于我们</a><div class="navicon"><img src="/static/images/nav_icon.png"> </div></li>
                <li><a href="<?=Url::toRoute('/product')?>">产品中心</a><div class="navicon"><img src="/static/images/nav_icon.png"> </div></li>
                <li><a href="<?=Url::toRoute('/support')?>">解决方案</a><div class="navicon"><img src="/static/images/nav_icon.png"> </div></li>

                <li><a href="<?=Url::toRoute('/service')?>">技术支持</a><div class="navicon"><img src="/static/images/nav_icon.png"> </div></li>

                <li><a href="<?=Url::toRoute(['/article'])?>">新闻中心</a><div class="navicon"><img src="/static/images/nav_icon.png"> </div></li>
                <li><a href="<?=Url::toRoute('/contact')?>">联系我们</a><div class="navicon"><img src="/static/images/nav_icon.png"> </div>
                </li>
             </ul>
            <p class="navtop"><img src="/static/images/navtop.png"></p>
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