<?php
  /** Create the Custom Post Type**/
  add_action('init', 'slider_register');  
  function slider_register() {  
    $labels = array(
      'name' => __('Slider'),
      'singular_name' => __('Slide'),
      'menu_name' => __('Slider Manager'),
      'name_admin_bar' => __('Slide'),
      'add_new' => __('Add New Slide'), 
      'add_new_item' => __('Add New Slide'), 
      'new_item' => __('New Slide'),
      'edit_item' => __('Edit Slide'),
      'view_item' => __('View Slide'),
      'all_items' => __('All Slides'),
      'search_items' => __('Search Slides'),
    );
    //Arguments to create post type.
    $args = array(  
      'labels' => $labels,
      'description' => __('Slides'),
      'public' => true,  
      'show_ui' => true,  
      'show_in_menu' => true,
      'rewrite' => array('slug' => 'slides', 'with_front' => false),
      'capability_type' => 'post',  
      'has_archive' => true,
      'hierarchical' => true,  
      'menu_position' => null,
      'supports' => array('title', 'editor', 'thumbnail'),
      'menu_icon' => 'dashicons-images-alt2',
    );  
    //Register type and custom taxonomy for type.
    register_post_type( 'slides' , $args );   
  }  
  function slider_add_meta(){  
    add_meta_box("slider-meta", "Slider Options", "slider_meta_options", "slides", "normal", "high");   
  }
  add_action('add_meta_boxes','slider_add_meta');
  function slider_meta_options(){
    global $post;  
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
        
    $custom = get_post_custom($post->ID);
    $btn_txt = $custom["btn_txt"][0]; 
    $btn_link = $custom["btn_link"][0]; 
        
  ?>  
    <div class="metabox">
      <div class="field group">
        <div class="fieldname">
          <label>Texto del Botón:</label>
        </div>
        <div class="fieldvalue">
          <input name="btn_txt" style="width:80%" value="<?php echo $btn_txt; ?>" />
        </div>
        <div class="fieldname">
          <label>Link del Botón:</label>
        </div>   
        <div class="fieldvalue">
          <input name="btn_link" style="width:80%" value="<?php echo $btn_link; ?>" />
        </div>    
      </div>
    </div>   
    <?php  
  } 
    
  add_action('save_post', 'slider_save_extras'); 
  
  function slider_save_extras(){  
    global $post;  
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){ //if you remove this the sky will fall on your head.
      return $post_id;
    }else{
      update_post_meta($post->ID, "btn_txt", $_POST["btn_txt"]); 
      update_post_meta($post->ID, "btn_link", $_POST["btn_link"]); 
    } 
  }  
?>