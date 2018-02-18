<div class="thumb">
	<?php	if ( has_post_thumbnail()) { ?>
		<a href="<?php echo get_field('link_url'); ?>" title="<?php the_title(); ?>">
		  <?php $post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
	    <img src="<?php echo $post_thumbnail_url; ?>" /> 
		</a>
	<?php } ?>
</div>