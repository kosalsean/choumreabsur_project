$(document).ready(function () {
    var option = 0;
    var opt2 = 0;
    $('#sideBar').click(function () {
        if (option == 0) {
            $('.left-menu').css({
                'left': '-270px'
            });
            $('.left-header').css({
                'display': 'none'
            });
            $('.right-header').css({
                'border-left': '0',
                'width': '100%'
            });
            // $('.left-menu').hide();
            $('.small-left-menu').show();
            option = 1;
        } else if (option == 1) {
            $('.left-menu').css({
                'left': '0px'
            });
            $('.left-header').css({
                'left': '0px'
            });
            $('.left-header').css({
                'display': 'block'
            });
            $('.right-header').css({
                'border-left': '1px solid #919191 ',
                'width': '82.5%'
            });
            $('.left-menu').show();
            $('.small-left-menu').hide();
            option = 0;
        }
    });

    $('#setting').click(function () {
        var eThis = $(this);
        if (opt2 == 0) {
            $('.submenu').slideDown();
            eThis.find('i').removeClass('fa-chevron-down');
            eThis.find('i').addClass('fa-chevron-up ');
            opt2 = 1;
        } else if (opt2 == 1) {
            $('.submenu').slideUp();
            eThis.find('i').removeClass('fa-chevron-up');
            eThis.find('i').addClass('fa-chevron-down');
            opt2 = 0;
        }
    });

    $('#setting-icon').click(function () {
        var eThis = $(this);
        if (opt2 == 0) {
            $('.small-submenu').slideDown();
            // eThis.find('i').removeClass('fa-chevron-down');
            // eThis.find('i').addClass('fa-chevron-up ');
            opt2 = 1;
        } else if (opt2 == 1) {
            $('.small-submenu ').slideUp();
            // eThis.find('i').removeClass('fa-chevron-up');
            // eThis.find('i').addClass('fa-chevron-down');
            opt2 = 0;
        }
    });

    $('.menu').on('click', 'li', function () {
        eThis = $(this);
        $('.menu').find('li').css({
            'background-color': '#334a52'
        });
        $('.submenu').find('li').css({
            'background-color': '#2D6F73'
        });
        eThis.css({
            'background-color': '#499082'
        });

    });
    $('.menu-icon').on('click', 'li', function () {
        eThis = $(this);
        $('.menu-icon').find('li').css({
            'background-color': '#334a52'
        });
        eThis.css({
            'background-color': '#499082'
        });
    });

});