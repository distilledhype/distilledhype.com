$('.blogarticle').find('h3').not(':first').before('<div class="coffee">&#9749;</div>');

$(document).scroll(function() {
	console.log('what');
	$(this).find('#logo').addClass('shadowed');
	if($(document).scrollTop() === 0) {
		$(this)
			.find('#logo')
			.removeClass('shadowed');
	}
});