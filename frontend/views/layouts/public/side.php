<div class="client-2">
    <ul id="client-2">

         <li class="my-kefu-qq">
            <div class="my-kefu-main">
              <div class="my-kefu-left">
                    <a class="online-contact-btn" target="_blank" th:href="'http://wpa.qq.com/msgrd?v=3&uin='+${data.items[0].children[0].serverType.name=='QQ'?data.items[0].children[0].serverType.content:''} +'&site=qq&menu=yes'" th:if="${ not #lists.isEmpty(data.items) and #lists.size(data.items)>0 and not #lists.isEmpty(data.items[0].children)  and #lists.size(data.items[0].children)>0 and  not #strings.isEmpty(data.items[0].children[0].serverType)}">
                        <i></i>
                        <p>QQ咨询</p>
                    </a>
               </div>
                <div class="my-kefu-right">
             </div>
            </div>
        </li>
        <li class="my-kefu-tel">
            <div class="my-kefu-tel-main">
                <div class="my-kefu-left">
                    <i></i>
                    <p>电话咨询 </p>
                </div>
                <div class="my-kefu-tel-right" phone400="">010-68173889</div>
            </div>
        </li>

        <li class="my-kefu-weixin">
            <div class="my-kefu-main">
                <div class="my-kefu-left">
                    <i></i>
                    <p>微信扫一扫</p>
                </div>
                <div class="my-kefu-right">
</div>
                <div class="my-kefu-weixin-pic">
                    <img src="/resource/images/cce2192286f14d84aef120ab48018b08_9.png">
                </div>
            </div>
        </li>

        <li class="my-kefu-ftop">
            <div class="my-kefu-main">
                <div class="my-kefu-left">
                    <a href="javascript:;">
                        <i></i>
                        <p>返回顶部</p>
                    </a>
                </div>
                <div class="my-kefu-right">
</div>
            </div>
        </li>
    </ul>


</div>