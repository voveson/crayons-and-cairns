<?php
/*
YARPP Template: Thumbnails
Description: Requires a theme which supports post thumbnails
Author: Vince Oveson
*/ ?>
<strong>You might also like:</strong><br>
<div class="row">
<?php if (have_posts()):?>
	<?php while (have_posts()) : the_post(); ?>
		<a href="<?php the_permalink() ?>">
			<div class="col s6 m4 l3">
				<img class="recd-post-img" src="<?= get_featured_img_url(); ?>">
				<?= the_title(); ?>
			</div>
		</a>
	<?php endwhile; ?>
<?php else: ?>
<p>No related posts.</p>
<?php endif; ?>
</div>
