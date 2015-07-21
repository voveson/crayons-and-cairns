<?php
/**
 * Template Name: About
 *
 */
?>
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
							<div class="post-cover-img about">
								
								<?php wd_slider(2); ?>
							</div>
							<div class="cc-post-content">
								<div class="cc-post-more single">
									<?php the_content() ?>									
								</div>
							</div>
						</div>
						<?php endwhile; else: ?>
						<p><?php _e('Oops! We couldn\'t find the post you\'re looking for!'); ?></p>
						<?php endif; ?><!-- The Loop -->
						<div class="cairn-definition">
							<img src="<?php bloginfo('template_url'); ?>/images/cairn-def.png">
						</div>
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

