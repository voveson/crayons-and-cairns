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
										<div class="cc-comments">
											<?php comments_template(); ?>
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
					</div>
					<div class="col s12 m12 l3">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>