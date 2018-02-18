<?php
	add_theme_support( 'post-formats', array( 'gallery', 'link', 'image', 'quote', 'status','video','audio','chat') );

	function dohko_post_format() {
	?>
		<p class="post-type">
	<?php
		if ( has_post_format('gallery') ) {
		    echo 'L';
		}
		if ( has_post_format('audio') ) {
		    echo 'c';
		}
		if ( has_post_format('chat') ) {
		    echo 'I';
		}
		if ( has_post_format('image') ) {
		    echo 'm';
		}
		if ( has_post_format('link') ) {
		    echo 'K';
		}
		if ( has_post_format('quote') ) {
		    echo 'k';
		}
		if ( has_post_format('video') ) {
		    echo 'D';
		}
		if ( has_post_format('status') ) {
		    echo 'F';
		}
		if ( !get_post_format() ) {
		    echo 'b';
		}
		?>
	</p>
	<?php
	}
?>