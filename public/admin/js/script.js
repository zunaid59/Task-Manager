 $(document).ready(function() {
            var submenu = $(".submenu>a");
            var i;
            for (i = 0; i < submenu.length; i++) {
                submenu[i].addEventListener('click', function() {
                    $(this).parent().children('ul').slideToggle();
                    return false;
                });
            }
            var issmall = true;
            var isbig = false;
            $('.responsive-icon').click(function() {
                $("#sidenav").slideToggle();
                issmall = false;
                isbig = true;
            });
            window.addEventListener("resize", responsive);

            function responsive() {
                var width = window.innerWidth;
                if (width >= 768) {
                    if (issmall == false) {
                        issmall = true;
                        $("#sidenav").slideDown();
                    }
                }
                if (width < 768) {
                    if (isbig == true) {
                        isbig = false;
                        $("#sidenav").slideUp();
                        console.log("less than 768");
                    }
                }
            }
        });
