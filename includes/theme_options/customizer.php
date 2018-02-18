<?php
	/*******************************************
    Color scheme
  ********************************************/
  function dohko_customize_register( $wp_customize ) {
    // add the section to contain the settings
    $wp_customize->add_section( 'theme_colors' , array(
        'title' =>  'Color Scheme',
    ) );
    // SETTINGS
    $wp_customize->add_setting(
      'main_bg', array(
        'default'   =>  '#1E3440',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'main_text', array(
        'default'   =>  '#FFFFFF',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
     $wp_customize->add_setting(
      'separator', array(
        'default'   =>  '#1E3440',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'main_text_hover', array(
        'default'   =>  '#CFCFCF',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'content_bg', array(
        'default'   =>  '#DADADA',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'aux_1', array(
        'default'   =>  '#3C687F',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'aux_2', array(
        'default'   =>  '#5A9BBF',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'aux_3', array(
        'default'   =>  '#6CBAE5',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    $wp_customize->add_setting(
      'aux_4', array(
        'default'   =>  '#78CFFF',
        'type'      =>  'option',
        'transport'   =>  'postMessage',
        'capability'  =>  'edit_theme_options'
      )
    );
    // CONTROLS
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'main_bg', array(
          'label'   =>  'Main Background Color',
          'description' => 'Background color for header and footer',
          'section' =>  'theme_colors',
          'settings'  =>  'main_bg'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'main_text', array(
          'label'   =>  'Main Text Color',
          'description' => 'Text color for header and footer',
          'section' =>  'theme_colors',
          'settings'  =>  'main_text'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'separator', array(
          'label'   =>  'Header Separator Color',
          'section' =>  'theme_colors',
          'settings'  =>  'separator'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'main_text_hover', array(
          'label'   =>  'Main Text Hover Color',
          'description' => 'Text color for header and footer on hover',
          'section' =>  'theme_colors',
          'settings'  =>  'main_text_hover'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'content_bg', array(
          'label'   =>  'Container Background Color',
          'description' => 'Background color for main container',
          'section' =>  'theme_colors',
          'settings'  =>  'content_bg'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'aux_1', array(
          'label' => 'Auxiliar Color 1',
          'description' => 'Main Links',
          'section' => 'theme_colors',
          'settings' => 'aux_1'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'aux_2', array(
          'label' => 'Auxiliar Color 2',
          'description' => 'Main Links Hover',
          'section' => 'theme_colors',
          'settings' => 'aux_2'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'aux_3', array(
          'label' => 'Auxiliar Color 3',
          'description' => 'Auxiliar Links',
          'section' => 'theme_colors',
          'settings' => 'aux_3'
        )
      )
    );
    $wp_customize->add_control( 
      new WP_Customize_Color_Control( 
        $wp_customize, 'aux_4', array(
          'label' => 'Auxiliar Color 4',
          'description' => 'Auxiliar Links Hover',
          'section' => 'theme_colors',
          'settings' => 'aux_4'
        )
      )
    );
  }

  add_action( 'customize_register', 'dohko_customize_register' );
  
  function dohko_customize_colors() {
    $main_bg = get_option( 'main_bg' );
    $main_text = get_option( 'main_text' );
    $main_text_hover = get_option( 'main_text_hover' );
    $separator = get_option( 'separator' );
    $content_bg = get_option( 'content_bg' );
    $aux_1 = get_option( 'aux_1' );
    $aux_2 = get_option( 'aux_2' );
    $aux_3 = get_option( 'aux_3' );
    $aux_4 = get_option( 'aux_4' );
  ?>
    <style>
    /* color scheme */
      /* BASICS */
      a{
        color: <?php echo $main_bg; ?>;
      }
      a:visited, a:hover{ 
        color: <?php echo $aux_1; ?>; 
      }
      /* LAYOUT */
      #container{
        background-color: <?php echo $content_bg; ?>; 
      }
      .page-title{
        color: <?php echo $main_bg; ?>;
      }
      .contact-content p{
        color: <?php echo $main_bg; ?>;
      }
      .contact-form p{
        color: <?php echo $main_bg; ?>;
      }
      .wpcf7-submit{
        background-color: <?php echo $main_bg; ?>; 
      }
      /* HEADER */
      .header-searchbar{
        background-color: <?php echo $main_bg; ?>; 
      }
      #search_text,
      #search_submit{
        background-color: <?php echo $main_bg; ?>;
        color: <?php echo $main_text; ?>; 
      }
      .sf-menu .menu-item a{
        color: <?php echo $main_text; ?>; 
      }
      .sf-menu .menu-item a:hover{
        color: <?php echo $main_text_hover; ?>; 
      }
      .sf-menu .sub-menu .menu-item a{
        color: <?php echo $main_text; ?>; 
        background-color: <?php echo $main_bg; ?>;
      }
      .sf-menu .sub-menu .menu-item a:hover{
        color: <?php echo $main_text_hover; ?>;
      }
      hr{
        background-color: <?php echo $separator; ?>;
      }
      /*-----------------------TOOGLE MENU-----------------------------*/
      .fa-bars,
      .fa-bars:hover,
      .fa-bars:focus,
      .fa-search,
      .fa-search:hover,
      .fa-search:focus{
        color: <?php echo $main_text; ?>; 
      }
      
      /* FOOTER */
      footer{
        background-color: <?php echo $main_bg; ?>;
        color: <?php echo $main_text; ?>; 
      }
      footer a{
        color: <?php echo $main_text; ?>; 
      }
      footer a:hover{
        color: <?php echo $main_text_hover; ?>; 
      }
      .sn_icons,
      .sn_icons:visited{
        color: <?php echo $main_text; ?>; 
      }
      .sn_icons:hover,
      .sn_icons:focus{
        color: <?php echo $main_text_hover; ?>; 
      }
      /* INDEX */
      .post-type {
        background-color: <?php echo $aux_1; ?>;
      }
      .read_more {
        background-color: <?php echo $main_bg; ?>;
        color: <?php echo $main_text; ?>;
      }
      .read_more:visited, .read_more:hover{
        background-color: <?php echo $aux_1; ?>;
        color: <?php echo $main_text; ?>;
      }
      .post-categories li{
        border-color: <?php echo $main_bg; ?>;
        color: <?php echo $main_bg; ?>;
      }
      .post-categories li:hover{
        border-color: <?php echo $aux_1; ?>;
        color: <?php echo $aux_1; ?>;
      }
      .meta-separator{
        background-color: <?php echo $content_bg; ?>; 
      }
      .post-tags li{
        border-color: <?php echo $aux_2; ?>;
        color: <?php echo $aux_2; ?>;
      }
      .post-tags li:visited,
      .post-tags li:hover{
        border-color: <?php echo $aux_3; ?>;
        color: <?php echo $aux_3; ?>;
      }
      .post-tags li a{
        border-color: <?php echo $aux_2; ?>;
        color: <?php echo $aux_2; ?>;
      }
      .post-tags li a:visited,
      .post-tags li a:hover{
        border-color: <?php echo $aux_3; ?>;
        color: <?php echo $aux_3; ?>;
      }
      .meta-post-index{
        color: <?php echo $main_bg; ?>;
      }
      .pagination span, 
      .pagination a {
        border-color: <?php echo $main_bg; ?>;
      }
      .pagination .current {
        background-color: <?php echo $main_bg; ?>;
        color: <?php echo $main_text; ?>;
      }
      .pagination a:visited,
      .pagination a:hover {
        color: <?php echo $aux_1; ?>;
        border-color: <?php echo $aux_1; ?>;
      }
      /* SINGLE */
      .post .post-title h2{
        color: <?php echo $main_bg; ?>;
      }
      .post .post-date{
        color: <?php echo $main_bg; ?>;
      }
      .post .post-author{
        color: <?php echo $main_bg; ?>;
      }
      .separator{
        background-color: <?php echo $content_bg; ?>;
      }
      .share_social{
        color: <?php echo $main_bg; ?>;
      }
      .related_post{
        background-color: <?php echo $main_bg; ?>;
      }
      .related_post .rp_title a{
        color: <?php echo $main_text; ?>; 
      }
      .related_post .rp_title a:hover{
        color: <?php echo $main_text_hover; ?>; 
      }
      /*--------------------WIDGETS-----------------------*/
      .widget-title {
        color: <?php echo $main_text; ?>; 
        background-color: <?php echo $main_bg; ?>;
      }
      .recent_post{
        background-color: <?php echo $main_bg; ?>;
      }
      .recent_post .rp_title a{
        color: <?php echo $main_text; ?>; 
      }
      .recent_post .rp_title a:hover{
        color: <?php echo $main_text_hover; ?>; 
      }
      /*--------PLUGINS--------*/
      .fbc-title{
        color: <?php echo $main_bg; ?>;
      }
    </style>  
    <?php
  }
  add_action( 'wp_head', 'dohko_customize_colors' );
?>