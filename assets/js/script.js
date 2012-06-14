$('.blogarticle').find('h3').not(':first').before('<div class="coffee">&#9749;</div>');

$(window).load(function() {
    $("body").removeClass("preload");
});