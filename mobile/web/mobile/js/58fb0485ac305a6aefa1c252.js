
            $(function() {
                $('.m4-t-sear1').click(function() {
                    $('.m4-t-sear2').show();

                });
            })
        

               function searchInfo() {
                    var searchKey = document.getElementById("key").value;
                    var base=$('head').data('base');
                    
                    location.href ="/search?key=" + searchKey;
                }
                $('.m4-t-sear2-txt p').click(function() {
                    $('.m4-t-sear2').hide();
                });
                $(".m4-t-sear2-inp-but").click(function() {
                    searchInfo();
                });
                function keydown(event) {
                    var e = event || window.event;
                    if (e && e.keyCode == 13) {
                        searchInfo();
                    }
                };
        

            $("[navcrumbs]").find("a").last().addClass('cur');
        

    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        autoHeight: true
    });
    

        $(function() {
            var hdlist = $('.m2-prod-content-1 .m2-prod-content-1-nav li'),
                bdlist = $('.m2-prod-content-1 .m2-prod-content-1-con>div.con'),
                togglebtn = $('.m2-prod-content-1 .m2-prod-content-1-nav .togglebtn'),
                flag = true;
            hdlist.on('click', function(event) {
                event.preventDefault();
                hdlist.removeClass('on').eq($(this).index()).addClass('on');
                bdlist.removeClass('on').eq($(this).index()).addClass('on');
            });
            if (hdlist.length > 4) {
                togglebtn.css('display', 'block');
            } else {
                togglebtn.css('display', 'none');
                $('.m2-prod-content-1 .m2-prod-content-1-nav').css('padding', '0px');
            }
            togglebtn.click(function(event) {
                $('.m2-prod-content-1 .m2-prod-content-1-nav li.more').slideToggle('fast');
            });
        })
    
