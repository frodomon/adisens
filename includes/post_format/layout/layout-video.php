<div class="entry-video"> 
	<?php 
		$video_url = get_field('video_url');
		$video_embed = get_field('video_embed');
		$video_file = get_field('video_file');
		
		if($video_url !== ''){ 
			echo wp_oembed_get($video_url);
		} 	
		elseif($video_embed !== '') { 
		  echo $video_embed;
		}
		elseif($video_file !== '') {
			echo do_shortcode( '[video src="'.$video_file.'"]' );
		} 
	?>
</div>