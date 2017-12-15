
            $(function() {
                $('.m4-t-sear1').click(function() {
                    $('.m4-t-sear2').show();

                });
            })
        

               function searchInfo() {
                    var searchKey = document.getElementById("key").value;
                    var base=$('head').data('base');
                    
                    location.href ="/mobile/search.php?key=" + searchKey;
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
        
