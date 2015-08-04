<!DOCTYPE html>
<head>
	<?php while ( have_posts() ) : the_post(); ?>
		<title><?php the_title(); ?> | Crayons &amp; Cairns</title>
		<meta property="og:image" content="<?= get_featured_img_url() ?>" />
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
											<?php related_posts(); ?>
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