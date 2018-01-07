<?php
/* @var $this \yii\web\View */
/* @var $content string */
?>
<link id="headercss" href="/static/newcss/mheader.css" type="text/css" rel="stylesheet" />
<nav class="yk-nav " id="mheader_nav">
    <div class="yk-nav-box">
        <div class="yk-nav-list" id="mheader_navbox">
            <ul class="yk-nav-pills">
                  <li class="on"><a href="<?=Url::toRoute('/about')?>"><i class="i0"></i>企业简介</a></li>
            </ul>
        </div>
    </div>
</nav>
<script>
  TouchSlide({slideCell:"#sd",effect:"leftLoop",mainCell:".dsffs",vis:3});
</script>
<script src="/static/newjs/iscroll.js"></script>
<script src="/static/newjs/mheader.js"></script><style type="text/css">

  .list-bj{width: 60px; height: 60px; border: 1px solid #ccc; text-align: center; line-height: 60px; font-size: 60px; font-family: "楷体"; font-weight: bold; color: #000000; _line-height:60px; *line-height:70px; line-height: 70px\9; margin-right:10px; }

  .area ul li:hover .list-bj{border: 1px solid #1653A3; color: #1653A3;}

  .area ul li:hover{border-bottom: 1px solid #1653A3; }

  .area ul{border-bottom: 1px solid #fff;}

</style>
<div class="iContainer">
  <div class="wrap clearfix">
    <div class="main">
       <div class="article2" id="info_content">
        <?=$content->content?>
       </div>
        <script language="javascript">
          $(function(){
            var imgObj = $("#info_content").find("img");
            if (imgObj.length > 0)
            {
              for (var i = 0; i < imgObj.length; i++)
              {
                if (imgObj[i].width > 1140) imgObj[i].width = 1140;
              }
            }
          });
        </script>
          </div>
  </div>
</div>
