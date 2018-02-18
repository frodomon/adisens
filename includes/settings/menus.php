<?php
	add_theme_support( 'nav-menus' );
	if ( function_exists( 'register_nav_menus' ) ) {
	  register_nav_menus(array('main' => 'Main Nav'));
	}

	function extra_setup() {
		register_nav_menu ('primary mobile', __( 'Navigation Mobile', 'DOHKO' ));
	}
	add_action( 'after_setup_theme', 'extra_setup' );
?>