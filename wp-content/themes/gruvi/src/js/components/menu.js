jQuery(document).ready(function( $ ) {
	$( ".mobile-menu__nav .menu-item-has-children > a" ).after( '<span class="dropdown-button">&nbsp;</span>' );
	$('.dropdown-button').click(function() {
		if ($(this).hasClass("is-active")) {
			$(this).removeClass('is-active');
			$(this).next('.sub-menu').slideUp('normal');
		} else {
			$(this).addClass('is-active');
			$(this).next('.sub-menu').slideDown('normal');
		}

		return false;
	});
});
