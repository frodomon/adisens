<?php get_header(); ?>
<div id="container" class="group">
	<div id="blog" class="left-col col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<?php if (have_posts()) :  while (have_posts()) : the_post(); 
			if ( get_post_format() ) {
				get_template_part( 'includes/post_format/content/content', get_post_format() );
			} 
			else {
				get_template_part( 'includes/post_format/content/content', 'single' );
			}?>
		<?php endwhile; else: ?>
			<p><?php _e('No posts were found. Sorry!'); ?></p>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
<script type="text/javascript">
 	$(window).ready(function() {
	  $('.flexslider').flexslider({
	    animation: "slide",
	    controlNav: false
	  });
	  $('.entry-video').fitVids();
	}); 
</script>