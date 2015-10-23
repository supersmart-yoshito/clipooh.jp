$(function(){
	$('#keyvisual').slick({
		infinite: true,
		speed: 500,
		fade: true,
		arrows: false,
		lazyLoad: 'ondemand',
		autoplay: true,
		autoplaySpeed: 2000,
		pauseOnHover: false,
		centerMode: true,
		cssEase: 'linear'
	}) ;

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
				slidesToShow: 2
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
