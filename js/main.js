$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.dogory').fadeIn();
        } else {
            $('.dogory').fadeOut();
        }

        if ($(this).scrollTop() > 430) {
            $('.panellewa').fadeIn();
        } else {
            $('.panellewa').fadeOut();
        }


        if ($(this).scrollTop() > 100) {
            $( "#hedek" ).removeClass( "bez" );
            $( "#hedek" ).addClass( "z" );

            $( "header" ).removeClass( "bez" );
            $( "header" ).addClass( "z" );

        } 

        if ($(this).scrollTop() < 10) {
            $( "#hedek" ).removeClass( "z" );
            $( "#hedek" ).addClass( "bez" );

            $( "header" ).removeClass( "z" );
            $( "header" ).addClass( "bez" );
        } 

    });

    $('.dogory').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    $('.historia1').click(function () {
        $("html, body").animate({
            scrollTop: $("#historia").offset().top - 40
        }, 600);
        return false;
    });

    $('.tworczosc').click(function () {
        $("html, body").animate({
            scrollTop: $("#tworczosc").offset().top - 40
        }, 600);
        return false;
    });
    
});

