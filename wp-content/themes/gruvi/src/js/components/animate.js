jQuery(document).ready(function( $ ) {
	function ImageAnimation() {
	$('.animate, h1, h2, h3, h4, h5, p').each(function(){
		var ImageHeight = $(window).height() -50;
		if($(document).scrollTop() >= $(this).offset().top - ImageHeight) {
		$(this).addClass('animate--visible');
		// $('h1').addClass('animate--visible');
		} else {
			$(this).removeClass('animate--visible');
		}
	});
	$('.fade').each(function(){
		var ImageHeight = $(window).height() -50;
		if($(document).scrollTop() >= $(this).offset().top - ImageHeight) {
		$(this).addClass('fade--visible');
		// $('h1').addClass('animate--visible');
		} else {
			$(this).removeClass('fade--visible');
		}
	});
  };
  ImageAnimation();
  $(document).scroll(function(){
	ImageAnimation();
  });
});
// function reveal() {
// 	var reveals = document.querySelectorAll(".animate");

// 	for (var i = 0; i < reveals.length; i++) {
// 	  var windowHeight = window.innerHeight;
// 	  var elementTop = reveals[i].getBoundingClientRect().top;
// 	  var elementVisible = 150;

// 	  if (elementTop < windowHeight - elementVisible) {
// 		reveals[i].classList.add("animate--visible");
// 	  } else {
// 		reveals[i].classList.remove("animate--visible");
// 	  }
// 	}
//   }

//   window.addEventListener("scroll", reveal);
