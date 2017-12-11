
        var QQ = "[[]]";


    $(".banner").slide({
        titOnClassName: "cur",
        effect: "fold",
        autoPlay: true
    });


        function searchInfo() {
            var key = document.getElementById("key").value;
            if (key) {
                location.href = "/search.php?key=" + key;
            } else {
                alert('请输入您要搜索的关键词！');
            }
        }
        
       $(function() {
            $("#key").keydown(
                function(e) {
                    if (e.keyCode == 13) {
                        searchInfo();
                    }
                });
        });
    

    $(".qsk .qs_com").mouseover(function(){
        $(this).find(".qsb2").hide().siblings(".qsb1").show();
        $(this).siblings(".qs_com").find(".qsb2").show().siblings(".qsb1").hide();
    })
    $(".qsk").each(function(){
        $(this).children(".qs_com:first").mouseover();
    });


    jQuery(".fs").slide({titCell:"",mainCell:".fsu ul",autoPage:true,effect:"left",autoPlay:true,prevCell:".fsj1",nextCell:".fsj2",vis:3});
    


        jQuery(".ysb").slide({ titCell: ".ssu ul li", mainCell: ".bd" });
    

    jQuery(".xxd").slide({titCell:".al_list .p1",mainCell:".xdz ul",autoPage:false,effect:"left",autoPlay:true,prevCell:".xdj1",nextCell:".xdj2",vis:1});
    
    jQuery(".xxd").slide({
        titCell: ".hd ul",
        mainCell: ".xdy .al_list",
        autoPage: true,
        effect: "top",
        autoPlay: true,
        scroll: 3,
        vis: 3
    });


        $(function() {
            var time;
            //var winHeight = top.window.document.body.clientHeight || $(window.parent).height();
            $('.client-2').css({
                'marginTop': -($('.client-2').height() / 2)
            });
            $('#client-2 li').on({
                'mouseenter': function() {
                    var scope = this;
                    time = setTimeout(function() {
                        var divDom = $(scope).children('div');
                        var maxWidth = divDom.width();
                        $(scope).stop().animate({
                            marginLeft: -maxWidth + 77,
                            width: maxWidth
                        }, 'normal', function() {
                            var pic = $(scope).find('.my-kefu-weixin-pic');
                            if (pic.length > 0) {
                                pic.show();
                            }
                        });
                    }, 100) 
},
                'mouseleave': function() {
                    var pic = $(this).find('.my-kefu-weixin-pic');
                    if (pic.length > 0) {
                        pic.hide();
                    }
                    clearTimeout(time);
                    var divDom = $(this).children('div');
                    $(this).stop().animate({
                        marginLeft: 0,
                        width: 77
                    }, "normal", function() { 
});
                }
            });
            //返回顶部
            $(window).scroll(function() {
                var scrollTop = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
                var eltop = $("#client-2").find(".my-kefu-ftop");
                if (scrollTop > 0) {
                    eltop.show();
                } else {
                    eltop.hide();
                }
            });
            $("#client-2").find(".my-kefu-ftop").click(function() {
                var scrollTop = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
                if (scrollTop > 0) {
                    $("html,body").animate({
                        scrollTop: 0
                    }, "slow");
                }
            }); 
});
    
