$(document).ready(function($) {
	
	/* Show and hide menu mobile */
	$('.mobile-menu').on('click', function(){
		$('.navbar-menu').toggle('slow');
	});

	/* Show and hide menu depend of window size */
	$(window).resize(function() {
		if ($(document).width() >= 768) {
			$('.navbar-menu').show();
		}else{
			$('.navbar-menu').hide();
		}
	});
});