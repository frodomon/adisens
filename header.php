<!DOCTYPE HTML>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?> | <?php wp_title(''); ?></title>
  <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>	
</head>
<body>
  <div id='wrap'>
	  <?php
      $logo= get_option( 'dohko_logo');
      $logo_inv= get_option( 'dohko_logo_inv');
      if (strcmp($logo, '') === 0) { $logo = IMAGES.'/logo_adisens.png'; } 
      if (strcmp($logo_inv, '') === 0) { $logo_inv = IMAGES.'/logo_adisens_inv.png'; } 
      $url = home_url( '/' );
    ?>
      <header>
        <div class="header-logo">
          <a href="<?php echo esc_url($url) ?>"><img id="logo-header" src="<?php print $logo; ?>" alt="<?php bloginfo('name'); ?>" /></a>
          <a href="<?php echo esc_url($url) ?>"><img id="logo-header_inv" src="<?php print $logo_inv; ?>" alt="<?php bloginfo('name'); ?>" /></a>
        </div>
        <div class="header-menu">
        	<?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'sf-menu' )); ?>
          <div class="togglemenu">
            <button class="togglebar" href="#" title="Menu"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></button>
          </div>
        </div>
        <div class="responsive-menu">
          <?php wp_nav_menu( array( 'theme_location' => 'primary mobile', 'menu_class' => 'toggle-menu' ) ); ?>
        </div>
    </header>	
    
    