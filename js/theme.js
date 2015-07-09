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
	$('.parallax').parallax();

	$('#sidebar-search').focus(function() {
		var $this = $(this);
		$this.closest('div.input-field').addClass('z-depth-1');
		$this.attr('placeholder', '');
	}).focusout(function() {
		var $this = $(this);
		$this.closest('div.input-field').removeClass('z-depth-1');
		$this.attr('placeholder', 'search this site...');
	});

	$('#nav-search-link').click(function(e) {
		e.preventDefault();
		var $this = $(this);

		$this.closest('ul').vivo(hideOptions);
	});

	$('#nav-search').focus(function(){
		$('body, html').animate({scrollTop: 0});
	}).focusout(function(e) {
		$('#nav-search').vivo(hideOptions);
	});

	$(".button-collapse").sideNav({
		closeOnClick: true
	});

	$('.dropdown-button').dropdown({
		constrain_width: false,
      	hover: true,
      	belowOrigin: true
	});

	$('.read-more-link').on('click', function(e) {
		e.preventDefault();
		var $excerpt = $(this).closest('div.cc-post-excerpt');
		var $more = $(this).closest('div.cc-post-content').find('.cc-post-more');
		$excerpt.hide();
		$more.show();
	});

	$('#back-to-top-container').on('click', function(e) {
		$('body, html').animate({scrollTop: 0});
	});

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

	$('.recd-post-img').mouseover(function(){
		$(this).animate({opacity: 0.70},{duration: 300});
	}).mouseout(function(){
		$(this).animate({opacity: 1},{duration: 300});
	});
/*
	Materialize.scrollFire([{
		selector: 	'main',
		offset: 	400,
		callback: 	""
	}]);*/
});