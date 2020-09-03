
(function ($) {

	$('#home-hero').on('slide.bs.carousel', function (event) {
		$(this).find('.custom-carousel-indicators li[data-slide-to="' + event.from + '"]').removeClass('active');
		$(this).find('.custom-carousel-indicators li[data-slide-to="' + event.to + '"]').addClass('active');

	});

})(jQuery)