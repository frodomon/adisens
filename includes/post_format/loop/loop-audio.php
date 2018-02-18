<div class="index-post group">
	<div class="thumbnail">
		<?php
			dohko_post_format(); 
			get_template_part( 'includes/post_format/layout/layout', 'audio' );
		?>
	</div>
	<div class="index-post-content group">
		<?php 
			index_post_title();
			dohko_post_content();
		?>
	</div>
	<div class="index-post-meta group">
		<?php dohko_meta_index(); ?>
	</div>
</div>