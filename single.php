<!DOCTYPE html>
<head>
	<?php while ( have_posts() ) : the_post(); ?>
		<title><?php the_title(); ?> | Crayons &amp; Cairns</title>
	<?php endwhile; ?>
	<?php get_header(); ?>
	<main>
		<div class="main-content">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l9">
						<!-- The Loop -->
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="post">
							<h1 class="post-title center-align"><?php the_title(); ?></h1>
							<div class="post-cover-img">
								<?php the_post_thumbnail(); ?>
								<!--<img src="http://onmilwaukee.com//images/articles/ca/camping/camping_fullsize_story1.jpg" class=" ">-->
							</div>
							<div class="cc-post-content">
								<div class="cc-post-more single">
									<?php the_content() ?>
									<div class="cc-post-footer">
										<div class="cc-post-meta">
											Posted on <?php the_time('F jS, Y') ?> by <?php the_author() ?>
										</div>
										<div class="cc-sharing">
											Share this post:
											<?php echo do_shortcode("[TheChamp-Sharing]"); ?>
										</div>
										<div class="recd-posts">
											<strong>You might also like:</strong><br>
											<div class="row">
												<div class="col s6 m4 l3">
													<img class="recd-post-img" src="https://bibledaily.files.wordpress.com/2009/09/off-road.jpg">
													Curabitur Consectetur velit Sed
												</div>
												<div class="col s6 m4 l3">
													<img class="recd-post-img" src="http://www.flyfishnewengland.com/lake-boat.jpg">
													Amet Fermentum Condimentum
												</div>
												<div class="col s6 m4 l3">
													<img class="recd-post-img" src="http://alterra.cc/media/turobj/icon/Grand_Canyon___Canyons_of_Utah_attr_37.jpg">
													Augue Diam Euismod
												</div>
												<div class="col s6 m4 l3">
													<img class="recd-post-img" src="http://blog.emsoutdoors.com/wp-content/uploads/2013/03/Camelbacks.jpg">
													Tempor Purus Pharetra
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endwhile; else: ?>
						<p><?php _e('Oops! We couldn\'t find the post you\'re looking for!'); ?></p>
						<?php endif; ?><!-- The Loop -->
						<hr class="hide-on-large-only">
						<!--
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
											<strong>You might also like:</strong><br>
											<div class="row">
												<div class="col s6 m4 l3">
													<img class="recd-post-img" src="https://bibledaily.files.wordpress.com/2009/09/off-road.jpg">
													Curabitur Consectetur velit Sed
												</div>
												<div class="col s6 m4 l3">
													<img class="recd-post-img" src="http://www.flyfishnewengland.com/lake-boat.jpg">
													Amet Fermentum Condimentum
												</div>
												<div class="col s6 m4 l3">
													<img class="recd-post-img" src="http://alterra.cc/media/turobj/icon/Grand_Canyon___Canyons_of_Utah_attr_37.jpg">
													Augue Diam Euismod
												</div>
												<div class="col s6 m4 l3">
													<img class="recd-post-img" src="http://blog.emsoutdoors.com/wp-content/uploads/2013/03/Camelbacks.jpg">
													Tempor Purus Pharetra
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>-->
					</div>
					<div class="col s12 m12 l3">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>