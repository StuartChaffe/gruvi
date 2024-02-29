jQuery(document).ready(function( $ ) {
	function ImageAnimation() {
	$('.animate, h1, h2, h3, h4, h5, p, .wp-block-buttons').each(function(){
		var ImageHeight = $(window).height() -10;
		if($(document).scrollTop() >= $(this).offset().top - ImageHeight) {
		$(this).addClass('animate--visible');
		// $('h1').addClass('animate--visible');
		} else {
			$(this).removeClass('animate--visible');
		}
	});
	$('.fade').each(function(){
		var ImageHeight = $(window).height() -20;
		if($(document).scrollTop() >= $(this).offset().top - ImageHeight) {
		$(this).addClass('fade--visible');
		// $('h1').addClass('animate--visible');
		} else {
			$(this).removeClass('fade--visible');
		}
	});
	$('.across, .wp-block-separator').each(function(){
		var ImageHeight = $(window).height() -20;
		if($(document).scrollTop() >= $(this).offset().top - ImageHeight) {
		$(this).addClass('across--visible');
		// $('h1').addClass('animate--visible');
		} else {
			$(this).removeClass('across--visible');
		}
	});
  };
  ImageAnimation();
  $(document).scroll(function(){
	ImageAnimation();
  });
  $(this).parent().prev().get(0).play();
});
