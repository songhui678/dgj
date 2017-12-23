<?php
use yii\widgets\Breadcrumbs;
?>
<link href="/mobile/css/contact.css" rel="stylesheet">
<div>
        <div class="m4-title_nav">
            <div class="m4-t-sear1"></div>
            <a class="m4-goback" href="javascript:history.back(-1);">返回上一页</a>
            <a href="/contact" id="m4-topclick"></a>
            <h2>公司信息</h2>
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
			'label' => '公司信息',
			'url' => ['/contact'],
			'template' => "{link}<p>",
		],

	]]);
?>
    </div>
</div>
 <!-- 文章列表2 -->
   <div class="m4-blk endit-content">
    <div class="m4-prod-content-1-con prod-content">
        <h2 class="m4-title1">博医康介绍</h2>
        <dl><h4>
    <a>专业冻干设备+解决方案提供商</a>
</h4>
<p>
    北京博医康实验仪器有限公司成立于2002年，总部位于北京，是一家专业冻干设备及解决方案提供商，能够为客户提供从实验室型、中试型到工业生产型全范围的真空冷冻干燥设备，以及完整的真空冷冻解决方案。
</p>
<p>
    <img alt="北京博医康" src="/mobile/resource/images/e177df9f6cd4434b9b42f76f7334862e_8.jpg" title="北京博医康">
</p>
<h4>
    <a>产品应用领域广泛</a>
</h4>
<p>
    十多年来，博医康坚持自主创新与技术引进相结合的发展之路，在公司冻干技术专家团队的努力下，公司的产品研发、生产能力与日俱增。时至今日，博医康真空冷冻干燥设备已在生物工程、医药、食品、材料科学以及科研等领域有着广泛应用，并凭借出色的产品质量，赢得了客户和市场的良好反馈。
</p>
<p>
    <img align="" alt="北京博医康" src="/mobile/resource/images/29ce693571db49299a74457a6f85b0c0_58.jpg" title="北京博医康">
</p>
<h3>
    <a>生产车间</a>
</h3>
<p>
    <img alt="博医康" src="/mobile/resource/images/29ce693571db49299a74457a6f85b0c0_63.jpg" title="博医康">
</p></dl>
    </div>

</div>