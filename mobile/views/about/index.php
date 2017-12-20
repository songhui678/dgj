<?php
use yii\widgets\Breadcrumbs;
?>
<link href="/mobile/css/contact.css" rel="stylesheet">
<div>
        <div class="m4-title_nav">
            <div class="m4-t-sear1"></div>
            <a class="m4-goback" href="javascript:history.back(-1);">返回上一页</a>
            <a href="/about" id="m4-topclick"></a>
            <h2>公司简介</h2>
        </div>
    </div>
      <!-- END FOOTER -->
    <?php $this->beginContent('@app/views/layouts/public/setting.php')?>
    <?php $this->endContent()?>
</div>
   <!-- 面包屑 -->
   <div class="m4-blk">
    <div class="m4-crumbs-1">
<?php echo Breadcrumbs::widget(['homeLink' => [
	'label' => '首页',
	'url' => ['/'],
	'template' => "<p>{link}<span>&gt;</span>",
],
	'links' => [
		[
			'label' => '公司简介',
			'url' => ['/about'],
			'template' => "{link}<p>",
		],

	]]);
?>
    </div>
</div>
   <div class="p12-aboutinfo-1">

   <div class="p12-aboutinfo-1-nr endit-content">
       <div class="content">
    <div class="intro">
        <div class="pro_t">
            <h3>
                <a href="#">公司简介</a><span>/ Company Profile</span>
            </h3>
        </div>
        <div style="clear:both;">
        </div>
        <dl>
            <dd class="fl">
                <h4>
                    <a href="#">专业冻干设备+解决方案提供商</a><i>Professional freeze-drying equipment</i>
                </h4>
                <p>
                    北京博医康实验仪器有限公司成立于2002年，总部位于北京，是一家专业冻干设备及解决方案提供商，能够为客户提供从实验室型、中试型到工业生产型全范围的真空冷冻干燥设备，以及完整的真空冷冻解决方案。
                </p>
            </dd>
            <dt class="fr">
                <img align="" alt="北京博医康" height="276" src="/resource/images/e177df9f6cd4434b9b42f76f7334862e_3.jpg" title="北京博医康" width="523">
            </dt>
        </dl>
        <dl class="dl01">
            <dt class="fl">
                <img align="" alt="北京博医康" height="310" src="/resource/images/29ce693571db49299a74457a6f85b0c0_58.jpg" title="北京博医康" width="574">
            </dt>
            <dd class="fr">
                <h4>
                    <a href="#">产品应用领域广泛</a><i>Wide range of applications</i>
                </h4>
                <p>
                    十多年来，博医康坚持自主创新与技术引进相结合的发展之路，在公司冻干技术专家团队的努力下，公司的产品研发、生产能力与日俱增。时至今日，博医康真空冷冻干燥设备已在生物工程、医药、食品、材料科学以及科研等领域有着广泛应用，并凭借出色的产品质量，赢得了客户和市场的良好反馈。
                </p>
            </dd>
        </dl>
    </div>
    <div class="fc">
        <div class="pro_t">
            <h3>
                <a href="#">生产车间</a><span>/ Company Profile</span>
            </h3>
        </div>
        <div class="clear">
        </div>
    </div>
</div>
<p>
    <img alt="博医康" src="/resource/images/29ce693571db49299a74457a6f85b0c0_63.jpg" title="博医康">
</p>
<style>
    .pro_t {
        font-family: "Microsoft YaHei";
        line-height: 38px;
        height: 44px;
        overflow: visible;
        background:url(http://ocekap4od.bkt.clouddn.com/pb_t_l.gif) left 42px repeat-x;
    }

    .pro_t h3 {
        float: left;
        font-weight: 100;
        height: 42px;
        border-bottom: 2px #0674b1 solid;
        margin: 0;
    }

    .pro_t h3 a {
        font-weight: 100;
        font-size: 24px;
        color: #333;
    }

    .pro_t h3 span {
        text-transform: uppercase;
        margin: 0 0 0 8px;
        font-size: 16px;
        color: #999;
        font-family: Arial;
    }

    .content div {
        margin: 0;
    }

    .content {
        min-width: 1000px;
        margin: 0 auto;
    }

    .intro {
        margin-top: 70px;
        height: 715px;
        overflow: hidden;
    }

    .intro dl {
        height: 276px;
        margin-top: 38px;
        overflow: hidden;
    }

    .intro dt {
        width: 52.3%;
        height: 276px;
        overflow: hidden;
    }

    .intro dt img {
        width: 100%;
        height: 276px;
    }

    .intro dd {
        width: 39.6%;
        height: 210px;
        overflow: hidden;
        display: inline;
        margin: 45px 0 0 3.2%;
    }

    .intro dd h4 {
        height: 56px;
        font: 18px "Microsoft Yahei";
        font-weight: bold;
        background:url(http://ocekap4od.bkt.clouddn.com/intro_h.gif) no-repeat left 3px;
        padding-left: 60px;
        overflow: hidden;
    }

    .intro dd h4 a {
        color: #333;
    }

    .intro dd h4 i {
        display: block;
        color: #d9d9d9;
        font: 12px Arial, Helvetica, sans-serif;
        text-transform: uppercase;
    }

    .intro dd p {
        font-size: 14px;
        color: #7b7b7b;
        line-height: 26px;
        height: 130px;
        overflow: hidden;
    }

    .intro .dl01 {
        height: 310px;
        margin-top: 0;
        overflow: hidden;
    }

    .intro .dl01 dt {
        width: 47.8%;
        height: 310px;
        overflow: hidden;
    }

    .intro .dl01 dt img {
        width: 100%;
        height: 310px;
    }

    .intro .dl01 dd {
        width: 45.2%;
        height: 280px;
        overflow: hidden;
        display: inline;
        margin: 30px 2.7% 0 0;
    }

    .intro .dl01 dd p {
        height: 208px;
        overflow: hidden;
    }

    .fc {
        overflow: hidden;
    }

    .fc01 {
        width: 64.9%;
        height: 400px;
        margin-top: 38px;
        overflow: hidden;
    }

    .fc01 dl {
        height: 206px;
        overflow: hidden;
        margin: 0;
    }

    .fc01 dd {
        width: 221px;
        height: 150px;
        overflow: hidden;
        float: left;
        border: 3px solid #c2c2c2;
        border-right: 0;
        font: 18px "Microsoft Yahei";
        padding: 50px 0 0 42px;
        margin-left: 0;
    }

    .fc01 dd a {
        color: #3d3d3d;
    }

    .fc01 dd span {
        display: block;
        font: 46px "Microsoft Yahei";
        color: #3d3d3d;
        font-weight: bold;
        height: 60px;
        overflow: hidden;
        position: relative;
        margin-top: -4px;
    }

    .fc01 dd i {
        display: block;
        font: 24px Arial, Helvetica, sans-serif;
        color: #9e9e9e;
        font-style: normal;
        text-transform: uppercase;
    }

    .fc01 dt {
        width: 383px;
        height: 206px;
        overflow: hidden;
        float: left;
    }

    .fc01 dt img {
        width: 383px;
        height: 206px;
        display: block;
    }

    .fc01 p {
        height: 185px;
        overflow: hidden;
        margin-top: 2px;
    }

    .fc01 p img {
        width: 315px;
        height: 185px;
        display: inline-block;
    }

    .fc01 p a.a02 img {
        width: 331px;
        height: 185px;
        margin-left: 3px;
    }

    .fc02 {
        width: 34.9%;
        margin-top: 38px;
        overflow: hidden;
    }

    .fc02 img {
        width: 349px;
        height: 234px;
        display: block;
    }

    .fc02 a.a02 img {
        width: 349px;
        height: 156px;
        margin-top: 3px;
    }

    .brd {
        clear: both;
        padding: 35px 0 0;
        height: 410px;
        overflow: hidden;
    }

    .brd_c {
        clear: both;
    }

    .brd_c a {
        display: inline-block;
        width: 25%;
        text-align: center;
        float: left;
        line-height: 0;
        font-size: 0;
        border-left: 1px #dcdcdc solid;
        border-bottom: 1px #dcdcdc solid;
        box-sizing: border-box;
    }

    .brd_c .lst {
        border-right: 1px #dcdcdc solid;
    }

    .brd_c a img {
        margin: 0 auto;
        display: block;
    }
</style>
   </div>

</div>
  </div>