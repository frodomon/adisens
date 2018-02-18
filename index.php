<?php get_header(); ?>
<div id="container" class="group">
	<div id='blog' class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 left-col group">
		<div id="grid" class="group" data-columns >
			<?php
				if (have_posts()) :  while (have_posts()) : the_post();
					if ( get_post_format() ) {
						get_template_part( 'includes/post_format/loop/loop', get_post_format() );
					}
					else {
						get_template_part( 'includes/post_format/loop/loop','single' );
					} 
				endwhile; endif; 
			?>
		</div>
		<?php dohko_pagination($pages = '', $range = 2); ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
<script type="text/javascript">
	window.sr = ScrollReveal({
	 reset: true,
	 origin: 'bottom',
	 mobile: false
	});
	sr.reveal('.index-post');
 	$(window).ready(function() {
	  $('.flexslider').flexslider({
	    animation: "slide",
	    controlNav: false
	  });
	  $('.entry-video').fitVids();
	}); 
</script>