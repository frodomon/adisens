<div class="thumbnail">
	<?php single_post_thumbnail(); ?>
</div>
<div class="post group">
	<?php 
		dohko_post_title();
		dohko_meta_top();
		dohko_meta_single();
		if(is_singular()) { 
			dohko_social_share();
		} 
  ?>
</div>