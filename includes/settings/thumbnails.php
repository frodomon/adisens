<?php
	/*Adds Support for Featured Images**/
	if (function_exists('add_theme_support')) {
	  add_theme_support('post-thumbnails');
	}

  function get_the_post_thumbnail_src($img){
	  return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
	}
?>