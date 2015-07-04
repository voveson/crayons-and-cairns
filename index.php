<!DOCTYPE html>
<head>
	<title>Crayons &amp; Cairns</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/materialize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script type="text/javascript">
	    (function() {
	        var path = '//easy.myfonts.net/v2/js?sid=200376(font-family=Crayon+Crumble)&key=GEjpgV3uDu',
	            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
	            trial = document.createElement('script');
	        trial.type = 'text/javascript';
	        trial.async = true;
	        trial.src = protocol + path;
	        var head = document.getElementsByTagName("head")[0];
	        head.appendChild(trial);
	    })();
	</script>
</head>

<body>
	<header>
		<nav class="hide-on-med-and-down">
			<div class="nav-wrapper">
				<div class="left brand">
			      	<a href="">
			      		Crayons&thinsp;<span class="amp">&amp;</span>&thinsp;Cairns
			      	</a>
		      	</div>
		      	<div class="right">
		      		<div id="nav-search" class="right input-field">
			    		<form>
			          		<input id="search" type="search" required placeholder="search this site...">
			          		<label for="search"><i class="mdi-action-search"></i></label>
			          		<i id="nav-search-close" class="mdi-navigation-close"></i>
			    		</form>
			    	</div>
			      	<ul class="right" id="main-nav-links">
			        	<li><a href="#">Home</a></li>
			        	<li><a class="dropdown-button" data-activates="dropdown1" href="#">Categories&nbsp;<i class="fa fa-caret-down"></i></a></li>
			        	<li><a href="#">About</a></li>
			        	<li><a href="#">Contact</a></li>
			        	<li id="nav-search-link"><a href="#"><i class="mdi-action-search"></i></a></li>
			      	</ul>
			      	<ul id="dropdown1" class="dropdown-content">
					  	<li>
			              	<a href="#!">Camping with Kids</a>
		              	</li>
			            <li>
			            	<a href="#!">Campfire Recipes</a>
			            </li>
			            <li>
			              	<a href="#!">Destinations</a>
			            </li>
			            <li>
			              	<a href="#!">Hiking</a>
			            </li>
					</ul>
		      	</div>
			</div>
		</nav>

		<!-- Mobile Navigation -->
		<nav id="mobile-nav" class="hide-on-large-only">
			<div class="nav-wrapper">
				<div class="brand left">
			      	<a href="">
			      		Crayons&thinsp;<span class="amp">&amp;</span>&thinsp;Cairns
			      	</a>
		      	</div>
		      	<a href="#" data-activates="mobile-nav-links" class="button-collapse ">
					<i class="mdi-navigation-menu"></i>
				</a>
				<ul class="side-nav" id="mobile-nav-links">
					<li><a href="#">Home</a></li>
					<li class="divider"></li>
					<li class="no-padding">
				      <ul class="collapsible collapsible-accordion">
				        <li>
				          <a class="collapsible-header account-actions">Categories&nbsp;<i class="fa fa-caret-down"></i></a></a>
				          <div class="collapsible-body">
				            <ul>
				              <li>
				              	<a href="#!">Camping with Kids</a>
				              </li>
				              <li>
				              	<a href="#!">Campfire Recipes</a>
				              </li>
				              <li>
				              	<a href="#!">Destinations</a>
				              </li>
				              <li>
				              	<a href="#!">Hiking</a>
				              </li>
				            </ul>
				          </div>
				        </li>
				      </ul>
				    </li>
				    <li class="divider"></li>
				    <li><a href="#">About</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Contact</a></li>
		      	</ul>
			</div>
		</nav>
		<div class="landing-header center-align">
	    	<h1 class="white-text">Crayons &amp; Cairns</h1>
	    </div>	
	</header>
	<main>
	<!--	
		<div class="header-img-container">
			<img src="<?php bloginfo('template_url'); ?>/images/bryce.jpg">
		</div>
	-->		
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l9">
					<!-- The Loop
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<small class="grey-text text-darken-1">Posted on <?php the_time('F jS, Y') ?></small>
					<p><?php the_content(__('(more...)')); ?></p>
					<hr> <?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>
					-->
					<div class="post">
						<h1 class="post-title center-align">Sample Post Title</h1>
						<div class="post-cover-img">
							<img src="http://onmilwaukee.com//images/articles/ca/camping/camping_fullsize_story1.jpg" class=" ">
						</div>
						<div class="post-content">
							<div class="post-excerpt">
								<p>
									Ut aliquam purus sit amet fermentum condimentum. Nam velit lacus, ullamcorper at ante at, pharetra consectetur nisi. Cras tincidunt dictum dui, id tempor purus pharetra ac. In hac habitasse platea dictumst. Nulla varius odio turpis, quis tempor augue hendrerit ultricies. Etiam viverra pharetra pulvinar. Aliquam libero nunc, tempor id est ut, ultricies dapibus odio.
								</p>
								<a class="read-more-link" href="#">read more&nbsp;<i class="fa fa-angle-double-down"></i></a>							
							</div>
							<div class="post-more">
								<p>
									Donec vel velit eu lorem posuere porttitor. Curabitur consectetur velit sed placerat scelerisque. Proin euismod mauris in dictum gravida. Nam aliquam pharetra ullamcorper. Vivamus quis eros tortor. Curabitur in porta massa, at venenatis metus. Nunc feugiat hendrerit ante sed molestie. Duis sed fringilla orci. Vivamus eros urna, posuere non nulla eu, egestas feugiat risus. Mauris condimentum nibh libero, sed pharetra tortor ultricies a. Aenean pulvinar diam id ligula bibendum, vel convallis nunc mattis. Proin mattis elit nisi, nec maximus nulla rhoncus et. Integer aliquam condimentum tortor quis fringilla.
								</p>
								<p>
									Nullam rhoncus urna lorem, dignissim euismod libero ultricies blandit. Curabitur iaculis tortor quis molestie porttitor. Praesent in interdum enim, a porta nisi. Mauris at diam a lectus maximus interdum ut in orci. Maecenas dolor lacus, mollis vel nisl vitae, fermentum lacinia quam. Morbi non tincidunt odio, ac congue sapien. Nulla vehicula quam pretium imperdiet venenatis. Mauris dictum urna et turpis maximus vestibulum. Nam dolor ante, bibendum condimentum laoreet eget, tincidunt quis purus.
								</p>
								<p>
									Quisque ullamcorper, neque quis imperdiet cursus, augue diam euismod massa, eu eleifend metus nulla ac nulla. Pellentesque placerat libero et ligula faucibus, non lacinia lacus tempor. Fusce diam quam, efficitur id egestas eu, ultricies sed sapien. Sed non ex accumsan, mattis ligula sed, vulputate orci. Donec vel aliquam nisi, eu viverra dolor. Ut suscipit aliquam erat, sit amet imperdiet ante consectetur eu. Fusce blandit odio at neque convallis, id feugiat dui porta. Suspendisse velit eros, convallis iaculis placerat non, eleifend eget nibh.
								</p>
								<div class="post-footer">
									<div class="post-meta">
										Posted on May 17, 2015 by Laura
									</div>
									<div class="recd-posts">
										<strong>You may also like:</strong><br>
										<div class="row">
											<div class="col s6 m4 l3">
												<img class="" src="https://bibledaily.files.wordpress.com/2009/09/off-road.jpg">
												Curabitur Consectetur velit Sed
											</div>
											<div class="col s6 m4 l3">
												<img class="" src="http://www.flyfishnewengland.com/lake-boat.jpg">
												Amet Fermentum Condimentum
											</div>
											<div class="col s6 m4 l3">
												<img class="" src="http://alterra.cc/media/turobj/icon/Grand_Canyon___Canyons_of_Utah_attr_37.jpg">
												Augue Diam Euismod
											</div>
											<div class="col s6 m4 l3">
												<img class="" src="http://blog.emsoutdoors.com/wp-content/uploads/2013/03/Camelbacks.jpg">
												Tempor Purus Pharetra
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr>

					<div class="post">
						<h1 class="post-title center-align">Another Sample Post</h1>
						<div class="post-cover-img">
							<img src="http://onmilwaukee.com//images/articles/ca/camping/camping_fullsize_story1.jpg" class=" ">
						</div>
						<div class="post-content">
							<div class="post-excerpt">
								<p>
									Ut aliquam purus sit amet fermentum condimentum. Nam velit lacus, ullamcorper at ante at, pharetra consectetur nisi. Cras tincidunt dictum dui, id tempor purus pharetra ac. In hac habitasse platea dictumst. Nulla varius odio turpis, quis tempor augue hendrerit ultricies. Etiam viverra pharetra pulvinar. Aliquam libero nunc, tempor id est ut, ultricies dapibus odio.
								</p>
								<a class="read-more-link" href="#">read more&nbsp;<i class="fa fa-angle-double-down"></i></a>							
							</div>
							<div class="post-more">
								<p>
									Donec vel velit eu lorem posuere porttitor. Curabitur consectetur velit sed placerat scelerisque. Proin euismod mauris in dictum gravida. Nam aliquam pharetra ullamcorper. Vivamus quis eros tortor. Curabitur in porta massa, at venenatis metus. Nunc feugiat hendrerit ante sed molestie. Duis sed fringilla orci. Vivamus eros urna, posuere non nulla eu, egestas feugiat risus. Mauris condimentum nibh libero, sed pharetra tortor ultricies a. Aenean pulvinar diam id ligula bibendum, vel convallis nunc mattis. Proin mattis elit nisi, nec maximus nulla rhoncus et. Integer aliquam condimentum tortor quis fringilla.
								</p>
								<p>
									Nullam rhoncus urna lorem, dignissim euismod libero ultricies blandit. Curabitur iaculis tortor quis molestie porttitor. Praesent in interdum enim, a porta nisi. Mauris at diam a lectus maximus interdum ut in orci. Maecenas dolor lacus, mollis vel nisl vitae, fermentum lacinia quam. Morbi non tincidunt odio, ac congue sapien. Nulla vehicula quam pretium imperdiet venenatis. Mauris dictum urna et turpis maximus vestibulum. Nam dolor ante, bibendum condimentum laoreet eget, tincidunt quis purus.
								</p>
								<p>
									Quisque ullamcorper, neque quis imperdiet cursus, augue diam euismod massa, eu eleifend metus nulla ac nulla. Pellentesque placerat libero et ligula faucibus, non lacinia lacus tempor. Fusce diam quam, efficitur id egestas eu, ultricies sed sapien. Sed non ex accumsan, mattis ligula sed, vulputate orci. Donec vel aliquam nisi, eu viverra dolor. Ut suscipit aliquam erat, sit amet imperdiet ante consectetur eu. Fusce blandit odio at neque convallis, id feugiat dui porta. Suspendisse velit eros, convallis iaculis placerat non, eleifend eget nibh.
								</p>
								<div class="post-footer">
									<div class="post-meta">
										Posted on May 17, 2015 by Ashley
									</div>
									<div class="recd-posts">
										<strong>You may also like:</strong><br>
										<div class="row">
											<div class="col s6 m4 l3">
												<img class="" src="https://bibledaily.files.wordpress.com/2009/09/off-road.jpg">
												Curabitur Consectetur velit Sed
											</div>
											<div class="col s6 m4 l3">
												<img class="" src="http://www.flyfishnewengland.com/lake-boat.jpg">
												Amet Fermentum Condimentum
											</div>
											<div class="col s6 m4 l3">
												<img class="" src="http://alterra.cc/media/turobj/icon/Grand_Canyon___Canyons_of_Utah_attr_37.jpg">
												Augue Diam Euismod
											</div>
											<div class="col s6 m4 l3">
												<img class="" src="http://blog.emsoutdoors.com/wp-content/uploads/2013/03/Camelbacks.jpg">
												Tempor Purus Pharetra
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr>

					<div class="post">
						<h1 class="post-title center-align">You Get the Idea</h1>
						<div class="post-cover-img">
							<img src="http://onmilwaukee.com//images/articles/ca/camping/camping_fullsize_story1.jpg" class=" ">
						</div>
						<div class="post-content">
							<div class="post-excerpt">
								<p>
									Ut aliquam purus sit amet fermentum condimentum. Nam velit lacus, ullamcorper at ante at, pharetra consectetur nisi. Cras tincidunt dictum dui, id tempor purus pharetra ac. In hac habitasse platea dictumst. Nulla varius odio turpis, quis tempor augue hendrerit ultricies. Etiam viverra pharetra pulvinar. Aliquam libero nunc, tempor id est ut, ultricies dapibus odio.
								</p>
								<a class="read-more-link" href="#">read more&nbsp;<i class="fa fa-angle-double-down"></i></a>							
							</div>
							<div class="post-more">
								<p>
									Donec vel velit eu lorem posuere porttitor. Curabitur consectetur velit sed placerat scelerisque. Proin euismod mauris in dictum gravida. Nam aliquam pharetra ullamcorper. Vivamus quis eros tortor. Curabitur in porta massa, at venenatis metus. Nunc feugiat hendrerit ante sed molestie. Duis sed fringilla orci. Vivamus eros urna, posuere non nulla eu, egestas feugiat risus. Mauris condimentum nibh libero, sed pharetra tortor ultricies a. Aenean pulvinar diam id ligula bibendum, vel convallis nunc mattis. Proin mattis elit nisi, nec maximus nulla rhoncus et. Integer aliquam condimentum tortor quis fringilla.
								</p>
								<p>
									Nullam rhoncus urna lorem, dignissim euismod libero ultricies blandit. Curabitur iaculis tortor quis molestie porttitor. Praesent in interdum enim, a porta nisi. Mauris at diam a lectus maximus interdum ut in orci. Maecenas dolor lacus, mollis vel nisl vitae, fermentum lacinia quam. Morbi non tincidunt odio, ac congue sapien. Nulla vehicula quam pretium imperdiet venenatis. Mauris dictum urna et turpis maximus vestibulum. Nam dolor ante, bibendum condimentum laoreet eget, tincidunt quis purus.
								</p>
								<p>
									Quisque ullamcorper, neque quis imperdiet cursus, augue diam euismod massa, eu eleifend metus nulla ac nulla. Pellentesque placerat libero et ligula faucibus, non lacinia lacus tempor. Fusce diam quam, efficitur id egestas eu, ultricies sed sapien. Sed non ex accumsan, mattis ligula sed, vulputate orci. Donec vel aliquam nisi, eu viverra dolor. Ut suscipit aliquam erat, sit amet imperdiet ante consectetur eu. Fusce blandit odio at neque convallis, id feugiat dui porta. Suspendisse velit eros, convallis iaculis placerat non, eleifend eget nibh.
								</p>
								<div class="post-footer">
									<div class="post-meta">
										Posted on May 17, 2015 by Laura
									</div>
									<div class="recd-posts">
										<strong>You may also like:</strong><br>
										<div class="row">
											<div class="col s6 m4 l3">
												<img class="" src="https://bibledaily.files.wordpress.com/2009/09/off-road.jpg">
												Curabitur Consectetur velit Sed
											</div>
											<div class="col s6 m4 l3">
												<img class="" src="http://www.flyfishnewengland.com/lake-boat.jpg">
												Amet Fermentum Condimentum
											</div>
											<div class="col s6 m4 l3">
												<img class="" src="http://alterra.cc/media/turobj/icon/Grand_Canyon___Canyons_of_Utah_attr_37.jpg">
												Augue Diam Euismod
											</div>
											<div class="col s6 m4 l3">
												<img class="" src="http://blog.emsoutdoors.com/wp-content/uploads/2013/03/Camelbacks.jpg">
												Tempor Purus Pharetra
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr>

					<div class="post">
						<h1 class="post-title center-align">The Final Sample Post</h1>
						<div class="post-cover-img">
							<img src="http://onmilwaukee.com//images/articles/ca/camping/camping_fullsize_story1.jpg" class=" ">
						</div>
						<div class="post-content">
							<div class="post-excerpt">
								<p>
									Ut aliquam purus sit amet fermentum condimentum. Nam velit lacus, ullamcorper at ante at, pharetra consectetur nisi. Cras tincidunt dictum dui, id tempor purus pharetra ac. In hac habitasse platea dictumst. Nulla varius odio turpis, quis tempor augue hendrerit ultricies. Etiam viverra pharetra pulvinar. Aliquam libero nunc, tempor id est ut, ultricies dapibus odio.
								</p>
								<a class="read-more-link" href="#">read more&nbsp;<i class="fa fa-angle-double-down"></i></a>							
							</div>
							<div class="post-more">
								<p>
									Donec vel velit eu lorem posuere porttitor. Curabitur consectetur velit sed placerat scelerisque. Proin euismod mauris in dictum gravida. Nam aliquam pharetra ullamcorper. Vivamus quis eros tortor. Curabitur in porta massa, at venenatis metus. Nunc feugiat hendrerit ante sed molestie. Duis sed fringilla orci. Vivamus eros urna, posuere non nulla eu, egestas feugiat risus. Mauris condimentum nibh libero, sed pharetra tortor ultricies a. Aenean pulvinar diam id ligula bibendum, vel convallis nunc mattis. Proin mattis elit nisi, nec maximus nulla rhoncus et. Integer aliquam condimentum tortor quis fringilla.
								</p>
								<p>
									Nullam rhoncus urna lorem, dignissim euismod libero ultricies blandit. Curabitur iaculis tortor quis molestie porttitor. Praesent in interdum enim, a porta nisi. Mauris at diam a lectus maximus interdum ut in orci. Maecenas dolor lacus, mollis vel nisl vitae, fermentum lacinia quam. Morbi non tincidunt odio, ac congue sapien. Nulla vehicula quam pretium imperdiet venenatis. Mauris dictum urna et turpis maximus vestibulum. Nam dolor ante, bibendum condimentum laoreet eget, tincidunt quis purus.
								</p>
								<p>
									Quisque ullamcorper, neque quis imperdiet cursus, augue diam euismod massa, eu eleifend metus nulla ac nulla. Pellentesque placerat libero et ligula faucibus, non lacinia lacus tempor. Fusce diam quam, efficitur id egestas eu, ultricies sed sapien. Sed non ex accumsan, mattis ligula sed, vulputate orci. Donec vel aliquam nisi, eu viverra dolor. Ut suscipit aliquam erat, sit amet imperdiet ante consectetur eu. Fusce blandit odio at neque convallis, id feugiat dui porta. Suspendisse velit eros, convallis iaculis placerat non, eleifend eget nibh.
								</p>
								<div class="post-footer">
									<div class="post-meta">
										Posted on May 17, 2015 by Ashley
									</div>
									<div class="recd-posts">
										<strong>You may also like:</strong><br>
										<div class="row">
											<div class="col s6 m4 l3">
												<img class="" src="https://bibledaily.files.wordpress.com/2009/09/off-road.jpg">
												Curabitur Consectetur velit Sed
											</div>
											<div class="col s6 m4 l3">
												<img class="" src="http://www.flyfishnewengland.com/lake-boat.jpg">
												Amet Fermentum Condimentum
											</div>
											<div class="col s6 m4 l3">
												<img class="" src="http://alterra.cc/media/turobj/icon/Grand_Canyon___Canyons_of_Utah_attr_37.jpg">
												Augue Diam Euismod
											</div>
											<div class="col s6 m4 l3">
												<img class="" src="http://blog.emsoutdoors.com/wp-content/uploads/2013/03/Camelbacks.jpg">
												Tempor Purus Pharetra
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr class="hide-on-med-and-up">
				<div class="col s12 m12 l3">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>