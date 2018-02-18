<div class="index-post link-format group">
	<div class="thumbnail">
		<?php
			dohko_post_format();
			get_template_part('includes/post_format/layout/layout','link');
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