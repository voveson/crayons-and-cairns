<div id="sidebar">
	<?php if(!is_page('about')): ?>
	<h3>About Us</h3>
	<img src="<?php bloginfo('template_url'); ?>/images/about.jpg" class="">
	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ligula eget mi euismod blandit.
	</p>
	
	<hr>
	<?php endif; ?>
	<form>
	    <div class="input-field" id="sidebar-search-container">
	      	<input id="sidebar-search" type="search" required placeholder="search this site...">
	      	<label for="sidebar-search"><i class="mdi-action-search"></i></label>
	      	<i class="mdi-navigation-close"></i>
	    </div>
	</form>

	<hr>
	<h3>Follow Us</h3>
	<div class="row">
		<div class="col s4 right-align social-icon">
			<a href="#"><i class="fa fa-facebook"></i></a>
		</div>
		<div class="col s4 center-align social-icon">
			<a href="https://twitter.com/crayonsncairns" target="_blank"><i class="fa fa-twitter"></i></a>
		</div>
		<div class="col s4 left-align social-icon">
			<a href="http://instagram.com/_u/crayonsandcairns/" target="_blank"><i class="fa fa-instagram"></i></a>
		</div>
	</div>

	<hr>
	<img src="http://moatsearch-data.s3.amazonaws.com/creatives/25b15570bf29cf30af6ad1cbb8b69f7bdf10a8bd.jpg" class="">

	<hr>
	<h3>Instagram</h3>
	<div style="display:none" id="insta-source">
		<?= do_shortcode('[fts instagram instagram_id=2097430197 type=user]'); ?>
	</div>
	<a href="http://instagram.com/_u/crayonsandcairns/" target="_blank">
		<div class="row" id="cc-instagram-widget">
		</div>
	</a>

</div>