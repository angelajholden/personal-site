var main = function() {
	$(window).on('resize', function() {
		if ( $(window).width() > 960 ) {
			$('.nav-primary').css('left','');
		}
	});
	$('.menu-open').on('click', function() {
		$('.nav-primary').animate({
			left: "0"
		}, 500);
	});
	$('.menu-close').on('click', function() {
		$('.nav-primary').animate({
			left: "-320px"
		}, 500);
	});
};
$(document).ready(main);
