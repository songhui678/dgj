<?php
use yii\helpers\Url;
?>
   <ul>
     <li class="cur"><a href="/" title="首页">首页</a> </li>
     <li><a href="<?=Url::toRoute('/product')?>" title="真空冷冻干燥机">真空冷冻干燥机</a> </li>
     <li><a href="/product/CengXiShiYanLing.html" title="层析实验冷柜">层析实验冷柜</a> </li>
     <li><a href="<?=Url::toRoute('/custom')?>" title="冻干机定制">冻干机定制</a> </li>
     <li><a href="<?=Url::toRoute('/support')?>" title="技术服务">技术服务</a> </li>
     <li><a href="<?=Url::toRoute(['/article'])?>" title="案例资讯">案例资讯</a> </li>
     <li><a href="<?=Url::toRoute('/about')?>" title="走进博医康">走进博医康</a> </li>
     <li><a href="<?=Url::toRoute('/contact')?>" title="联系博医康">联系博医康</a> </li>
   </ul>