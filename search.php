<!DOCTYPE html>
<head>
	<title>Crayons &amp; Cairns | Search Results</title>
	<?php get_header(); ?>
	<main>
		<div class="main-content">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l9" id="search-results">
						<h3>
							<?php printf( __( 'Search Results for: %s' ), '<span>"' . get_search_query() . '"</span>'); ?>
						</h3>
						<?php if ( have_posts() ) : ?>

							<?php
							// Start the loop.
							while ( have_posts() ) : the_post(); ?>

								<a href="<?php the_permalink(); ?>">
									<div class="row">
										<div class="col s3 m2">
											<?php the_post_thumbnail(); ?>
										</div>
										<div class="col s9 m10 search-result-excerpt">
											<strong><?php the_title(); ?></strong><br>
											<?php the_excerpt(); ?>
											<div class="search-result-meta">
												Posted on <?php the_time('F jS, Y') ?> by <?php the_author() ?>
											</div>
										</div>
									</div>
								</a>
								<hr>

							<?php endwhile; // End the loop.

						// If no content, include the "No posts found" template.
						else : ?>
							No matches found.

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