<?php
use yii\widgets\Breadcrumbs;
?>
<link href="/mobile/css/support.css" rel="stylesheet">
   <!-- 面包屑 -->
   <div class="m4-blk">
    <div class="m4-crumbs-1">
<?php echo Breadcrumbs::widget(['homeLink' => [
	'label' => '首页',
	'url' => ['/'],
	'template' => "<p>{link}",
],
	'links' => [
		[
			'label' => '非标定制',
			'url' => ['/support'],
			'template' => "{link}<p>",
		],

	]]);
?>
    </div>
</div>
<div class="p12-aboutinfo-1">

   <div class="p12-aboutinfo-1-nr endit-content">
       <style>
    .ws {
        font-family: "Microsoft YaHei", serif;
        overflow: hidden;
    }

    .ws h3 {
        background:url("/static/images/qsx.jpg") no-repeat scroll center 73px;
        color: #0674b1;
        font-size: 40px;
        height: 300px;
        padding-top: 10px;
        text-align: center;
    }

    .ws h3 p {
        color: #666666;
        font-size: 24px;
        font-weight: normal;
        margin-top: 72px;
    }

    .ws h3 a {
        color: #0674b1;
    }

    .ws li {
        float: left;
        position: relative;
        text-align: center;
        width: 232px;
    }

    .ws li a {
        display: block;
        height: 340px;
    }

    .ws li em {
        color: #333333;
        display: block;
        font-size: 24px;
        padding: 140px 0 15px;
        font-style: normal;
    }

    .ws li span {
        color: #666666;
        display: block;
        font-size: 16px;
        line-height: 25px;
        margin: 0 auto;
        width: 213px;
    }

    .ws li .wsi {
        height: 190px;
        left: 25px;
        position: absolute;
        top: -105px;
        width: 190px;
    }

    .ws li p {
        background:url("/static/images/wsy1.png") no-repeat scroll 0 0;
        height: 190px;
        left: 25px;
        position: absolute;
        top: -120px;
        width: 190px;
    }

    .ws li:last-child {
        margin-right: 0;
    }

    .ws li a:hover {
        background: #efefef none repeat scroll 0 0;
    }

    .ws li a:hover p {
        background:url("/static/images/wsy2.png") no-repeat scroll 0 0;
    }

    .ws li a:hover em {
        color: #0674b1;
    }
</style>
<div class="ws content">
    <h3>
        我们的服务
        <p>
            好产品源于完整的解决方案系统
        </p>
    </h3>
    <ul>
        <li>
            <a><img alt="解决方案" class="wsi" src="/static/images/wst_03.jpg">
                <p>
                    <br>
                </p>
                <em>解决方案</em><span>博医康拥有优秀的研发团队，可以为客户提供从实验室研究、中试到工业生产全范围的真空冷冻解决方案</span></a>
        </li>
        <li>
            <a><img alt="工艺培训" class="wsi" src="/static/images/wst_05.jpg">
                <p>
                    <br>
                </p>
                <em>工艺培训</em><span>博医康定期举办技术研讨会,与客户携手推动冻干技术发展,切实解决客户冻干难题</span></a>
        </li>
        <li>
            <a><img alt="样品冻干" class="wsi" src="/static/images/wst_07.jpg">
                <p>
                    <br>
                </p>
                <em>样品冻干</em><span>博医康专设冻干实验室,根据客户需求,可免费提供样品冻干实验,以及冻干工艺优化服务</span></a>
        </li>
        <li>
            <a><img alt="非标定制" class="wsi" src="/static/images/wst_08.jpg">
                <p>
                    <br>
                </p>
                <em>非标定制</em><span>专业承接非标准真空冷冻干燥机项目，提供完善的冻干系统解决方案，满足客户对冻干生产不同的应用需求。</span></a>
        </li>
        <li>
            <a><img alt="售后维护" class="wsi" src="/static/images/wst_11.jpg">
                <p>
                    <br>
                </p>
                <em>售后维护</em><span>完善的服务体系，严格奉行三快准则(响应快、上门快、维修快)，及时为客户排忧解难。</span></a>
        </li>
    </ul>
</div>
   </div>

</div>
  </div>