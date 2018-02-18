<?php
  /** Create the Custom Post Type**/
  add_action('init', 'client_register');  
  function client_register() {  
    //Arguments to create post type.
    $args = array(  
      'label' => __('Clients Manager'),  
      'singular_label' => __('client'),  
      'public' => true,  
      'show_ui' => true,  
      'capability_type' => 'post',  
      'hierarchical' => true,  
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
      'rewrite' => array('slug' => 'clients', 'with_front' => false),
      'menu_icon' => 'dashicons-admin-users',
    );  
    //Register type and custom taxonomy for type.
    register_post_type( 'clients' , $args );   
  }  
?>