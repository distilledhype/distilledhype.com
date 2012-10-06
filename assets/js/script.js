$('.blogarticle').find('h3').not(':first').before('<div class="coffee">&#9749;</div>');

$(window).load(function() {

    // Show distillation date
    var $morelink = $('.morelink');

    $('body').removeClass( "preload" );
    $morelink.find( 'img' ).on({
        mouseenter: function() {
           $(this).parent().next( '.date_article' ).fadeIn();
        },
        mouseout: function() {
            $(this).parent().next( '.date_article' ).fadeOut();
        }
    });

    $morelink.on({
        focus: function() {
           $(this).next( '.date_article' ).fadeIn();
        },
        focusout: function() {
            $(this).next( '.date_article' ).fadeOut();
        }
    });

    // Add jk-nav
    $('h1, h2, .next, .prev').jknav();
    $.jknav.init();

    // Make sidebar content sticky
    var $sidebarContent = $('.sidebar-content');
    var $contentEl      = $('.span5');
    var origOffsetY     = $sidebarContent.offset().top - 30;
    var $window         = $(window);

    function onScroll( e ) {

        if ( window.scrollY >= origOffsetY ) {
            if ( $window.width() > 770 ) {
                $sidebarContent.addClass('sticky');
                $contentEl.addClass('content-margin-left');
            }
        }
        else {
            $sidebarContent.removeClass('sticky');
            $contentEl.removeClass('content-margin-left');
        }
    }

    $(document).on('scroll', onScroll);
});