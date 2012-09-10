$('.blogarticle').find('h3').not(':first').before('<div class="coffee">&#9749;</div>');

$(window).load(function() {

    var $morelink = $('.morelink');

    $('body').removeClass( "preload" );
    $morelink.find( 'img' ).on({
        mouseenter: function() {
           $(this).parent().next( 'time' ).fadeIn();
        },
        mouseout: function() {
            $(this).parent().next( 'time' ).fadeOut();
        }
    });

    $morelink.on({
        focus: function() {
           $(this).next( 'time' ).fadeIn();
        },
        focusout: function() {
            $(this).next( 'time' ).fadeOut();
        }
    });

    $('h1, h2, .next, .prev').jknav();
    $.jknav.init();
});