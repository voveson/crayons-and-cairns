<?php
/**
 * Template Name: Contact
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
						<div id="thank-you" class="post">
							<h1 class="post-title center-align"><?php the_title(); ?></h1>
							<div class="post-cover-img">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="cc-post-content">
								<div class="cc-post-more single">
									<div class="contact-page-content">
										<?php the_content() ?>
									</div>
									<div id="cc-contact-thanks">
										Thank you for your message!  We will get back to you as soon as we can.
									</div>
									<div class="contact-form-source">
										<?= do_shortcode('[si-contact-form form="1"]'); ?>
									</div>
									<div class="cc-contact-form-container">
										<form id="cc-contact-form">
											<div class="input-field">
									        	<input type="text" id="cc_name" name="cc_name"/>
									        	<label for="cc_name">Name</label>
									        </div>
									        <div class="input-field">
									        	<input validate type="email" id="cc_email" name="cc_email"/>
									        	<label for="cc_email">Email Address</label>
									        </div>
									        <div class="input-field">
									        	<input type="text" id="cc_subject" name="cc_subject"/>
									        	<label for="cc_subject">Subject</label>
									        </div>
									        <div class="input-field">
									        	<textarea name="cc_message" id="cc_message" class="materialize-textarea"></textarea>
          										<label for="cc_message">Message</label>
									        </div>
									        <div class="input-field right">
									        	<button id="submit-contact-btn" class="waves-effect waves-light btn">
									        		<i class="fa fa-paper-plane right"></i>Submit
									        	</button>
									        </div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<?php endwhile; else: ?>
						<p><?php _e('Oops! We couldn\'t find the post you\'re looking for!'); ?></p>
						<?php endif; ?><!-- The Loop -->
						
					</div>
					<div class="col s12 m12 l3">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>