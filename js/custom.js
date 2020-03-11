jQuery(document).ready(function($) {

	// main banner slow scroll
	var pContainerHeight = $('.banner, #about').height();

	$(window).scroll(function(){

	  var wScroll = $(this).scrollTop();

	  if (wScroll <= pContainerHeight) {

	    $('.title-area').css({
	      'transform' : 'translate(0px, '+ wScroll /13 +'%)'
	    });

	  }
	});

	// Smooth Scroll
	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});

	$(function() {
		var header = $("header");
		$(window).scroll(function() {
				var scroll = $(window).scrollTop();
				if (scroll >= 100) {
					$('.menu__toggler').css({
							margin: '-5rem 0 0 0'
					});
				} else {
						$('.menu__toggler').css({
								margin: '-2.3rem 0 0 0'
						});
				}
		});
	});

});
