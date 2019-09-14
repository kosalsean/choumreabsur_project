$(document).ready(function () {
    var option = 0;
    $('#sideBar').click(function () {
        if (option == 0) {
            $('.left-menu').css({
                'left': '-270px'
            });
            $('.left-header').css({
                'display': 'none'
            });
            $('.right-header').css({
                'border-left': '0'
            });
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
                'border-left': '1px solid #919191 '
            });
            option = 0;
        }
    });
});