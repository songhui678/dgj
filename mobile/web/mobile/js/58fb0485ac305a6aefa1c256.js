
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
        

        var swiper = new Swiper('.m4-product-2-con', {
            slidesPerView: 2,
            spaceBetween: 15,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            autoHeight: true,
            slidesPerGroup:2
        });
    
