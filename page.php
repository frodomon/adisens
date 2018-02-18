<?php get_header(); ?>
<div id="main" class="group">
	<div>
		<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
			<div class="post group">
				<h2><?php the_title(); ?></h2>
					<?php the_content('Read More...'); ?>
			</div>
		<?php endwhile; else: ?>
			<p><?php _e('No posts were found. Sorry!'); ?></p>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>