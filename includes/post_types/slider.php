<?php
  /** Create the Custom Post Type**/
  add_action('init', 'slider_register');  
  function slider_register() {  
    //Arguments to create post type.
    $args = array(  
      'label' => __('Slider Manager'),  
      'singular_label' => __('Slider'),  
      'public' => true,  
      'show_ui' => true,  
      'capability_type' => 'post',  
      'hierarchical' => true,  
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
      'rewrite' => array('slug' => 'slides', 'with_front' => false),
      'menu_icon' => 'dashicons-images-alt2',
    );  
    //Register type and custom taxonomy for type.
    register_post_type( 'slides' , $args );   
  }  
?>