jQuery(document).ready(function($) {
	$(".slider").slick({
		// settings: "unslick",
		speed: 200,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: false,
		autoplaySpeed: 10000,
		pauseOnHover: false,
		arrows: true,
		infinite: true,
		dots: false,
		centerMode: true,
		centerPadding: '15%',
		responsive: [
			{
			   	breakpoint: 800,
				settings: {
					slidesToShow: 1,
					centerPadding: '5%',
				}
			}
		 ]
	});
	$(".tab-slider").slick({
		// settings: "unslick",
		speed: 200,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: false,
		autoplaySpeed: 10000,
		pauseOnHover: false,
		arrows: true,
		infinite: true,
		dots: false
	});
});
