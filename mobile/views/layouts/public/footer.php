<?php
use yii\helpers\Url;
?>
<div class="contact">
    <div class="tel">010-51656110，68678971</div>
    <div class="add">北京市石景山区八角西街61号</div>
    <ul class="contact-ul">
        <li><a href="tel:01051656110"><img src="/static/images/icon_tel.jpg"> </a> </li>
        <li><a href="<?=Url::toRoute(['/contact'])?>"><img src="/static/images/icon_map.jpg"> </a> </li>
        <li><a href="mqqwpa://im/chat?chat_type=wpa&uin=&version=1&src_type=web&web_src=oicqzone.com"><img src="/static/images/icon_qq.jpg"> </a> </li>
        <li><a href=""><img src="/static/images/icon_weibo.jpg"> </a> </li>
    </ul>
    <div class="copyright">
        <p>
    Copyright 2018 新默真科技（北京）有限公司版权所有 京ICP备10200644号
</p>
<p>
    新默真科技，为您提供冻干机、酶标仪、蠕动泵和灌装机等产品专业的技术咨询和服务
</p>    </div>
</div>
<div class="footnav">
    <div class="foot clearfix">
        <ul class="list_01 clearfix">
            <li><a href="<?=Url::toRoute('/')?>"><img src="/static/images/foot_home.png"><p>首页</p></a></li>
            <li><a href="<?=Url::toRoute('/product')?>"><img src="/static/images/foot_product.png"><p>产品</p></a></li>
        </ul>
        <ul class="list_02 clearfix">
            <li><a href="<?=Url::toRoute('/service')?>"><img src="/static/images/foot_customer.png"><p>客户</p></a></li>
            <li><a href="<?=Url::toRoute(['/article'])?>"><img src="/static/images/foot_news.png"><p>资讯</p></a></li>
        </ul>
        <div class="menubtn">
            <a href="javascript:;"><span>+<Br>menu</span></a>
        </div>
    </div>
</div>
</body>
</html>
