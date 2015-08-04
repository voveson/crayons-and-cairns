<?php
/**
 * Template Name: Coming Soon
 * Author: Vince Oveson
 */
?>
<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Crayons &amp; Cairns</title>
	<link rel="icon" type="image/png" href="http://52.24.122.177/candc-beta/wp-content/themes/candc-theme/crayons-and-cairns/images/favicon.png">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
	<?php wp_head() ?>
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
			width: 100px;
			height: auto;
		}
	</style>
</head>
<body>
	<main>
		<div class="main-content">
			<img src="https://www.dropbox.com/s/8dm4bjx8a2ej9tj/teal-cairn.png?dl=0&raw=1">
			<h1>Coming Soon</h1>
			<h2>
				<?= do_shortcode('[countdown event="Until launch" date="20 August 2015" hour="10" minutes="0" seconds="00" format="DHMS"]'); ?>
			</h2>
			<h2>
				In the mean time, follow us on
				social media for news and details!
			</h2>
			<div class="social-links">
				<table>
					<tr>
						<td><a href=""><i class="fa fa-facebook"></i></a></td>
						<td><a href=""><i class="fa fa-twitter"></i></a></td>
						<td><a href=""><i class="fa fa-instagram"></i></a></td>
						<td><a href=""><i class="fa fa-pinterest"></i></a></td>
					</tr>
				</table>
			</div>
		</div>
	</main>
	<?php wp_footer() ?>
</body>
</html>	