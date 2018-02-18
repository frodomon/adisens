<?php
  function dohko_scripts() {
		wp_enqueue_style( 'style-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css');
		wp_enqueue_style( 'fonts-maven', 'https://fonts.googleapis.com/css?family=Maven+Pro' );
		wp_enqueue_script( 'script-jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), '3.1.1', true );
		wp_enqueue_script( 'scripts', JAVASCRIPTS .'/scripts.js', array(), '1.0.0', true );
		wp_enqueue_script( 'salvattore', JAVASCRIPTS .'/salvattore.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'animation', JAVASCRIPTS .'/scrollreveal.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'flexslider', JAVASCRIPTS .'/jquery.flexslider-min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'IframeResizer', JAVASCRIPTS .'/jquery.fitvids.js', array(), '1.0.0', true ); 
		wp_enqueue_script( 'script-superfish', JAVASCRIPTS .'/superfish.js', array(), '1.0.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'dohko_scripts' );
	function dohko_admin_scripts(){
		wp_enqueue_style( 'metabox-style', DOHKO_DIR.'/css/metabox.css');
		wp_enqueue_script( 'media-manager-metabox', JAVASCRIPTS .'/media-upload-meta-box.js', array(), '1.0.0', true );
	}
	add_action('admin_enqueue_scripts','dohko_admin_scripts');
?>