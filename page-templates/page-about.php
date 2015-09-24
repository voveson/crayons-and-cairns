<?php
/**
 * Template Name: About
 * Author: Vince Oveson
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
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="cc-post-content">
								<div class="cc-post-more single">
									<?php the_content() ?>									
								</div>
							</div>
						</div>
						<?php endwhile; else: ?>
						<p><?php _e("Oops! We couldn't find the post you're looking for!"); ?></p>
						<?php endif; ?><!-- The Loop -->
						<div class="cairn-definition">
							<table class="hide-on-small-only">
								<tr>
									<td class="left-cell">Cairn&nbsp;[kern]&nbsp;noun:</td>
									<td class="right-cell">a small pile of stones, used to guide or mark a trail.</td>
								</tr>
							</table>

							<table class="hide-on-med-and-up">
								<tr>
									<td class="top-cell">Cairn&nbsp;[kern]&nbsp;noun:</td>
								</tr>
								<tr>
									<td class="bottom-cell">a small pile of stones, used to guide or mark a trail.</td>
								</tr>
							</table>
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

