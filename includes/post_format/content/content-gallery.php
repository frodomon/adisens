<div class="thumbnail">
	<?php get_template_part( 'includes/post_format/layout/layout', 'gallery' ); ?>
</div>
<div class="post group">
	<?php 
		dohko_post_title();
		dohko_meta_top();
		dohko_excerpt();
		dohko_meta_single();
		if(is_singular()) { 
			dohko_social_share();
		} 
  ?>
</div>