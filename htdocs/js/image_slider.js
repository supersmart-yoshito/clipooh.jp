$(function(){
	$('.image_slider').slick({
		centerMode: true,
		centerPadding: '60px',
		lazyLoad: 'ondemand',
		slidesToShow: 3,
		autoplay: true,
		autoplaySpeed: 2000,
		arrows: true,
		responsive: [{
			breakpoint: 768,
			settings: {
				arrows: true,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 3
			}
		},
		{
			breakpoint: 480,
			settings: {
				arrows: true,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 1
			}
		}]

	});
});
