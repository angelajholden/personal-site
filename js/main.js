var main = function() {
	$(window).on('resize', function() {
		if ( $(window).width() > 1024 ) {
			$('.nav-primary').css('left','');
		}
	});
	$('.menu-open').on('focus', function() {
		$('.nav-primary').animate({
			left: "0"
		}, 500);
	});
	$('.menu-close').on('focus', function() {
		$('.nav-primary').animate({
			left: "-320px"
		}, 500);
	});
};
$(document).ready(main);
