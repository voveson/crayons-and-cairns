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

$(function() {
	$('.parallax').parallax();

	$('#sidebar-search').focus(function() {
		var $this = $(this);
		$this.closest('div.input-field').addClass('z-depth-2');
		$this.attr('placeholder', '');
	}).focusout(function() {
		var $this = $(this);
		$this.closest('div.input-field').removeClass('z-depth-2');
		$this.attr('placeholder', 'search this site...');
	});

	$('#nav-search-link').click(function(e) {
		e.preventDefault();
		var $this = $(this);

		$this.closest('ul').vivo(hideOptions);
	});

	$('#nav-search').focusout(function(e) {
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
		var $more = $(this).closest('div.post-content').find('.post-more');
		$more.css({maxHeight: 'none'});
		$(this).hide();
	});

	$('#back-to-top-container').on('click', function(e) {
		$('body, html').animate({scrollTop: 0});
	});

	Materialize.scrollFire([{
		selector: 	'main',
		offset: 	400,
		callback: 	"$('#back-to-top-container').fadeIn();"
	}]);
});