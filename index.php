<!DOCTYPE html>
<?php if(coming_soon()): ?>
<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Crayons &amp; Cairns</title>
	<link rel="icon" type="image/png" href="http://52.24.122.177/candc-beta/wp-content/themes/candc-theme/crayons-and-cairns/images/favicon.png">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<style>
		@media only screen and (max-width: 600px) {
			html {
				font-size: 12px;
			}
			img {
				width: 60px !important;
			}
			h1 {
				font-size: 5rem !important;
			}
			h2 {
				font-size: 2.1rem !important;
			}
		}
		@media only screen and (max-width: 992px) and (min-width: 601px) {
			html {
				font-size: 14px;
			}
		}
		@media only screen and (min-width: 993px) {
			html {
				font-size: 15px;
			}
		}
		h1, h2, h3, h4 {
			font-family: 'Aracne Stamp';
			color: #009688;
		}
		h1 {
			font-size: 6rem;
			margin-top: 10px;
		}
		h2 {
			font-size: 2.5rem;
		}
		.main-content {
			text-align: center;
			max-width: 600px;
			margin: 50px auto;
		}
		.social-links {
			font-size: 2rem;
			text-align: center;
		}
		.social-links a > i {
			color: #ef6c00;
		}
		#mfPreviewBar, #mfPreviewBarShow {
			display: none;
		}
		.shailan_CountdownWidget a {
			display: none;
		}
		.countdown_amount {
			color: #ef6c00;
		}
		table {
			width: 60%;
			margin: 20px auto;
		}
		img {
			width: 85px;
			height: auto;
		}
		.timer-column {
			width: 24%;
			text-align: center;
			display: inline-block;
			font-size: 1.2rem;
			font-family: 'Aracne Stamp';
			font-weight: bold;
			color: #009688;
		}
		.timer-column span {
			font-size: 2.5rem;
			color: #ef6c00;
		}
		.timer-exp-date {
			text-align: center;
			font-family: 'Aracne Stamp';
			font-weight: bold;
			font-size: 1.15rem;
			color: #ef6c00;
			margin-top: 20px;
		}
		#email-input {
			height: 25px;
			line-height: 25px;
			border-radius: 5px;
			border: solid 1px gray;
			padding-left: 5px;
		}
		#email-input:focus {
			outline: none;
			border: solid 1.5px #009688;
		}
		button {
			height: 29px;
			line-height: 29px;
			border-radius: 5px;
			background-color: #009688;
			color: white;
			outline: none;
			border: none;
			padding: 0 15px;
			cursor: pointer;
		}
		#subscribing, #subscribed {
			font-family: 'Aracne Stamp';
			display: none;
			text-align: center;
			width: 100%;
			font-size: 1.5rem;
			color: gray;
		}
		#subscribed i {
			color: #009688;
		}
	</style>
</head>
<body>
	<main>
		<div class="main-content">
			<img src="<?php bloginfo('template_url'); ?>/images/teal-cairn.png">
			<h1>Coming Soon</h1>
			<div id="cc-timer">
				<div class="timer-column">
					<span id="cc-days-count"></span><br>
					DAYS
				</div>
				<div class="timer-column">
					<span id="cc-hours-count"></span><br>
					HOURS
				</div>
				<div class="timer-column">
					<span id="cc-minutes-count"></span><br>
					MINUTES
				</div>
				<div class="timer-column">
					<span id="cc-seconds-count"></span><br>
					SECONDS
				</div>
				<div class="timer-exp-date">
					Tuesday August 11, 2015 @ 8&thinsp;:&thinsp;00 AM (MDT)
				</div>
			</div>
			<h2>
				We've got an exciting giveaway planned for our launch, so follow us on social media for news and updates!
			</h2>
			<div style="display:none" class="cc-email-subscribe">
				<form id="subscribe-form">
					<input id="email-input" type="email" placeholder="Email">
					<button type="submit">Subscribe</button>
				</form>
				<div id="subscribing">
					<i class="fa fa-spinner fa-spin"></i>&nbsp;Subscribing...
				</div>
				<div id="subscribed">
					Subscribed!&nbsp;<i class="fa fa-check"></i>
				</div>
			</div>
			<div class="social-links">
				<table>
					<tr>
						<td><a href="https://www.facebook.com/crayonsandcairns" target="_blank"><i class="fa fa-facebook"></i></a></td>
						<td><a href="https://twitter.com/crayonsncairns" target="_blank"><i class="fa fa-twitter"></i></a></td>
						<td><a href="http://instagram.com/_u/crayonsandcairns/" target="_blank"><i class="fa fa-instagram"></i></a></td>
						<td><a href="https://www.pinterest.com/CCadventuremoms/" target="_blank"><i class="fa fa-pinterest"></i></a></td>
					</tr>
				</table>
			</div>
		</div>
	</main>
	<script src="<?php bloginfo('template_url'); ?>/js/library.js"></script>
	<script type="text/javascript">
	    (function() {
	        var path = '//easy.myfonts.net/v2/js?sid=229610(font-family=Aracne)&sid=229612(font-family=Aracne+Light)&sid=264533(font-family=Aracne+Stamp)&key=JIldsgJFxr',
	            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
	            trial = document.createElement('script');
	        trial.type = 'text/javascript';
	        trial.async = true;
	        trial.src = protocol + path;
	        var head = document.getElementsByTagName("head")[0];
	        head.appendChild(trial);
	    })();
	</script>
	<script>
		$(function() {
			var current_time = new Date(<?= time() * 1000 ?>);
			var exp_time = new Date(2015, 7, 11, 8, 0, 0, 0);
			var diff_ms = exp_time - current_time;
			var diff_days = Math.floor(diff_ms / 86400000);
			var leftover = diff_ms % 86400000;
			var diff_hours = Math.floor(leftover / 3600000);
			leftover = leftover % 3600000;
			var diff_minutes = Math.floor(leftover / 60000);
			leftover = leftover % 60000;
			var diff_seconds = Math.floor(leftover / 1000);
			
			var timer = {
				days: 		diff_days,
				hours: 		diff_hours,
				minutes: 	diff_minutes,
				seconds: 	diff_seconds,
				current: 	current_time,
				exp: 		exp_time,
				tick: 		function() {
					this.current.setSeconds(this.current.getSeconds() + 1);
					var diff_ms = exp_time - current_time;
					this.days = Math.floor(diff_ms / 86400000);
					var leftover = diff_ms % 86400000;
					this.hours = Math.floor(leftover / 3600000);
					leftover = leftover % 3600000;
					this.minutes = Math.floor(leftover / 60000);
					leftover = leftover % 60000;
					this.seconds = Math.floor(leftover / 1000);
				}
			}

			var run_timer = setInterval(function(){
				timer.tick();
				update_timer();
			}, 1000);

			var cc_days = $('#cc-days-count');
			var cc_hours = $('#cc-hours-count');
			var cc_minutes = $('#cc-minutes-count');
			var cc_seconds = $('#cc-seconds-count');

			function update_timer()
			{
				cc_days.text(timer.days);
				cc_hours.text(timer.hours);
				cc_minutes.text(timer.minutes);
				cc_seconds.text(timer.seconds);

				if(timer.days == 0 && timer.hours == 0 && timer.minutes == 0 && timer.seconds == 0)
				{
					clearInterval(run_timer);
					location.reload();
				}
			}

			$('#subscribe-form').submit(function(e) {
				e.preventDefault();
				$(this).hide();
				$('#subscribing').show();

				setTimeout(function(){
					$('#subscribing').hide();
					$('#subscribed').show();
				}, 3000);
			});
		});
	</script>
</body>
</html>	
<?php else: ?>
<head>
	<title>Crayons &amp; Cairns</title>
	<?php get_header(); ?>
	<main>
		<div class="main-content">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l9">
						<!-- The Loop -->
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="post">
							<h1 class="post-title center-align">
								<a href="<?= the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h1>
							<div class="post-cover-img">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="cc-post-content">
								<div class="cc-post-excerpt">
									<?php the_excerpt() ?>
									<a class="read-more-link" href="#">read more&nbsp;<i class="fa fa-angle-double-down"></i></a>
								</div>
								<div class="cc-post-more">
									<?php the_content() ?>
									<div class="cc-post-footer">
										<div class="cc-post-meta">
											Posted on <?php the_time('F jS, Y') ?> by <?php the_author() ?>
										</div>
										<div class="cc-charing-and-comments row">
											<div class="cc-sharing col s12 m6">
												Share this post:
												<?php echo do_shortcode("[TheChamp-Sharing]"); ?>
											</div>
											<div class="cc-comment-count col s12 m6">
												<a href="<?= the_permalink(); ?>/#disqus_thread">
													<i class="fa fa-comments"></i>&nbsp;
												</a>
												<a href="<?= the_permalink(); ?>/#disqus_thread">
													<?= comments_number('Be the first to comment', '1 Comment', '% Comments') ?>
												</a>
											</div>
										</div>
										<div class="recd-posts">
											<?php related_posts(); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr> <?php endwhile; else: ?>
						<p><?php _e('Oops! We couldn\'t find the post you\'re looking for!'); ?></p>
						<?php endif; ?>
					</div>
					<div class="col s12 m12 l3">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>
<?php endif; ?>