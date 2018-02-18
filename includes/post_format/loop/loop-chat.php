<div class="index-post group">
	<div class="thumbnail">
		<?php
			dohko_post_format(); 
			index_post_thumbnail(); 
		?>
	</div>
	<div class="index-post-content group">
		<?php 
			index_post_title();
			dohko_post_content();
			dohko_read_more();
		?>
	</div>
	<div class="index-post-meta group">
		<?php dohko_meta_index(); ?>
	</div>
</div>