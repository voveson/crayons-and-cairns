var hideOptions = {
	duration: 300,
	effects: 'slideOutRight',
	onAnimationEnd: function(el, options) {
		el.hide();

		if (el.is('ul'))
		{
			$('#nav-search').show().vivo(showOptions);
			$('#search').focus();
		}
		else
		{
			$('#main-nav-links').show().vivo(showOptions);
		}
	}
};

var showOptions = {
	duration: 300,
	effects: 'slideInLeft',
	onAnimationEnd: function(el, options) {
		el.show();
	}
}

var backToTopVisible = false;

$(function() {

	// Compute the size of the background image
	var img = new Image();
	
	img.onload = function() {
		$('.main-content').css('margin-top', compute_main_top(img));
	};
	
	img.src = $('body').css('background-image').replace(/url\(|\)$|"/ig, '');

	// Listen for screen resize/rotate events
	var resizeTimer;

	$(window).on('resize', function(e) {
		clearTimeout(resizeTimer);
	 	resizeTimer = setTimeout(function() {
	 		img.src = $('body').css('background-image').replace(/url\(|\)$|"/ig, '');
	 		$('.main-content').css('margin-top', compute_main_top(img));
		}, 250);
	});

	// Trigger focus styles for sidebar search
	$('#sidebar-search').focus(function() {
		var $this = $(this);
		$this.attr('placeholder', '');
	}).focusout(function() {
		var $this = $(this);
		$this.attr('placeholder', 'search this site...');
	});

	// Trigger navbar show search animation
	$('#nav-search-link').click(function(e) {
		e.preventDefault();
		var $this = $(this);

		$this.closest('ul').vivo(hideOptions);
	});

	// Trigger navbar hide search animation
	$('#nav-search').focus(function(){
		$('body, html').animate({scrollTop: 0});
	}).focusout(function(e) {
		$('#nav-search').vivo(hideOptions);
	});

	// Initialize side nav for mobile
	$(".button-collapse").sideNav({
		closeOnClick: true
	});

	// Initialize categories dropdown
	$('.dropdown-button').dropdown({
		constrain_width: false,
      	hover: true,
      	belowOrigin: true
	});

	// Trigger expand post function
	$('.read-more-link').on('click', function(e) {
		e.preventDefault();
		var $excerpt = $(this).closest('div.cc-post-excerpt');
		var $more = $(this).closest('div.cc-post-content').find('.cc-post-more');
		$excerpt.hide();
		$more.show();
	});

	// Handle clicks on back-to-top button
	$('#back-to-top-container').on('click', function(e) {
		$('body, html').animate({scrollTop: 0});
	});

	// Fade in/out back-to-top button
	$(window).scroll(function() {
		var scroll = parseInt($(window).scrollTop());
		if (scroll > 400)
		{
			if(!backToTopVisible)
			{
				backToTopVisible = true;
				$('#back-to-top-container').fadeIn('slow');
			}
		}
		else
		{
			backToTopVisible = false;
			$('#back-to-top-container').fadeOut('slow');
		}
	});

	// Trigger hover styles for rec'd post images
	$('.recd-post-img').mouseover(function(){
		$(this).animate({opacity: 0.70},{duration: 300});
	}).mouseout(function(){
		$(this).animate({opacity: 1},{duration: 300});
	});
});

function compute_main_top(img)
{
	var w = $(window).width();
	var h = $(window).height();
	var top = 0;

	img_h = (w/img.width) * img.height;

	if (w < 992)
		img_h -= 56;
	else
		img_h -= 110;

	top = Math.min(0.7 * h, img_h);
	
	return top + 'px';
}