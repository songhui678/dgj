<?php
/* ===========================以下为本页配置信息================================= */
/* 页面基本属性 */
$this->title = '后台首页';
$this->params['title_sub'] = '后台首页';

/* 渲染其他文件 */
//echo $this->renderFile('@app/views/public/login.php');

/* 加载页面级别JS */
//$this->registerJsFile('@web/static/common/js/app.js');

?>

<div class="note note-info">
    <p> 相关统计信息 </p>
</div>

<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="1349"><?=$goodsView['view']?></span>
                </div>
                <div class="desc"> 产品查看总次数 </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 red" href="#">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="12,5"><?=$articleView['view']?></span></div>
                <div class="desc"> 文章查看总次数 </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 green" href="#">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="549">0</span>
                </div>
                <div class="desc"> 网站被访问次数 </div>
            </div>
        </a>
    </div>
    <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number"> +
                    <span data-counter="counterup" data-value="89"></span>% </div>
                <div class="desc"> Brand Popularity </div>
            </div>
        </a>
    </div>-->
</div>
<div class="clearfix"></div>

<div class="row-fluid margin-bottom-30">
    <div class="span6">


    </div>
</div>


<!-- 定义数据块 -->
<?php $this->beginBlock('test');?>
jQuery(document).ready(function() {
    highlight_subnav('index/index'); //子导航高亮
});
<?php $this->endBlock()?>
<!-- 将数据块 注入到视图中的某个位置 -->
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END);?>
