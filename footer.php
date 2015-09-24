		<footer class="teal lighten-2">
			<div class="container">
				<div class="row">
					<div class="col s6 m4">
						<div class="left" style="padding-left: 10px;">
							<h4>Crayons &amp; Cairns</h4>
							<ul>
								<li>
									<a href="<?= get_home_url(); ?>">Home</a>
								</li>
								<li>
									<a href="<?= get_permalink( get_page_by_path( 'about' ) ); ?>">About</a>
								</li>
								<li>
									<a href="<?= get_permalink( get_page_by_path( 'contact' ) ); ?>">Contact</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col s4 hide-on-small-only">
						<div class="center-align">
							<img src="<?php bloginfo('template_url'); ?>/images/footer-logo.png">
						</div>
					</div>
					<div class="col s6 m4 center-align">
						<h5>Let's Socialize!</h5>
						<a target="_blank" href="https://www.facebook.com/crayonsandcairns">
							<i class="fa fa-facebook social-icon"></i>
						</a>
						<a target="_blank" href="https://twitter.com/crayonsncairns">
							<i class="fa fa-twitter social-icon"></i>
						</a>
						<a target="_blank" href="http://instagram.com/_u/crayonsandcairns/">
							<i class="fa fa-instagram social-icon"></i>
						</a>
						<a target="_blank" href="https://www.pinterest.com/CCadventuremoms/">
							<i class="fa fa-pinterest social-icon"></i>
						</a>
						<a target="_blank" href="https://www.youtube.com/channel/UCnTIg_Aw7GP7HiiVEsyg5EA">
							<i class="fa fa-youtube social-icon"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="row copyright">
				<div class="col s12" style="text-align: center;">
					&copy; <?= date_format(new DateTime(), "Y"); ?> Crayons &amp; Cairns.  All rights reserved.
				</div>
			</div>
		</footer>
		<script src="<?php bloginfo('template_url'); ?>/js/library.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/theme.js"></script>
		<?php wp_footer() ?>
	</body>
</html>