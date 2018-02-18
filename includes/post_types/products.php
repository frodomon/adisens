<?php
  /** Create the Custom Post Type**/
  add_action('init', 'product_register');  
  function product_register() {  
    $labels = array(
      'name' => __('Products'),
      'singular_name' => __('Product'),
      'menu_name' => __('Product Manager'),
      'name_admin_bar' => __('Product'),
      'add_new' => __('Add New Product'), 
      'add_new_item' => __('Add New Product'), 
      'new_item' => __('New Product'),
      'edit_item' => __('Edit Product'),
      'view_item' => __('View Product'),
      'all_items' => __('All Products'),
      'search_items' => __('Search Products'),
    );
    //Arguments to create post type.
    $args = array(  
      'labels' => $labels,
      'description' => __('Products'),
      'public' => true,  
      'show_ui' => true,
      'show_in_menu' => true,
      'rewrite' => array('slug' => 'products', 'with_front' => false),
      'capability_type' => 'post',  
      'has_archive' => true,
      'hierarchical' => true,
      'menu_position' => null,
      'supports' => array('title', 'editor', 'thumbnail'),
      'menu_icon' => 'dashicons-images-alt2',
    );  
    register_post_type( 'products' , $args );   
  }
  add_action( 'init', 'create_product_taxonomies');
  function create_product_taxonomies() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => __( 'Especies'),
    'singular_name'     => __( 'Especie'),
    'search_items'      => __( 'Search Especies'),
    'all_items'         => __( 'All Especies'),
    'parent_item'       => __( 'Parent Especie'),
    'parent_item_colon' => __( 'Parent Especie'),
    'edit_item'         => __( 'Edit Especie'),
    'update_item'       => __( 'Update Especie'),
    'add_new_item'      => __( 'Add New Especie'),
    'new_item_name'     => __( 'New Especie Name'),
    'menu_name'         => __( 'Especies'),
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'especies' ),
  );

  register_taxonomy( 'especie', array( 'products' ), $args );

}
  function product_add_meta(){  
    add_meta_box("product-meta", "Product Options", "product_meta_options", "products", "normal", "high");   
  }
  add_action('add_meta_boxes','product_add_meta');
  function product_meta_options(){
    global $post;  
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
        
    $custom = get_post_custom($post->ID);
    $package = $custom["package"][0]; 
    
    $img_id = $custom["img_id"][0]; 
    // Get WordPress' media upload URL
    $upload_link = esc_url( get_upload_iframe_src( 'image', $post->ID ) );
    // See if there's a media id already saved as post meta
    $your_img_id = get_post_meta( $post->ID, '_your_img_id', true );
    // Get the image src
    $your_img_src = wp_get_attachment_url( $img_id );
    // For convenience, see if the array is valid
    $you_have_img = !empty($your_img_src);
    
  ?>  
    <div class="metabox">
      <div class="field group">
        <div class="fieldname">
          <label>Presentación:</label>
        </div>
        <div class="fieldvalue">
          <input name="package" value="<?php echo $package; ?>" />
        </div>    
      </div>
      <div class="field group">
        <div class="fieldname">
          <label>Ficha Técnica:</label>
        </div>
        <div class="fieldvalue">
          <div class="docLink">
            <?php 
              if ( $you_have_img ) :
                $custom_doc = wp_get_attachment_url( $img_id );
                $filename = basename( get_attached_file($img_id))
            ?>          
              <a href="<?php echo $custom_doc; ?>" target='_blank'><?php echo $filename ?></a>          
            <?php endif; ?>
          </div>
          <!-- Your add & remove image links -->
          <div class='custom-img-controls'>
            <div class="hide-if-no-js">
              <button class="upload-custom-img <?php if ( $you_have_img  ) { echo 'hidden'; } ?>" href="#">
                <?php _e('Cargar Ficha Técnica') ?>
              </button>
              <button class="delete-custom-img <?php if ( ! $you_have_img  ) { echo 'hidden'; } ?>" href="#">
                <?php _e('Eliminar Ficha Técnica') ?>
              </button>
            </div>
          </div>
          <!-- A hidden input to set and post the chosen image id -->
          <input class="custom-doc-id" type="hidden" name="img_id"  value="<?php echo esc_attr( $img_id ); ?>" />
        </div>
      </div>
    </div>   
    <?php  
  } 
    
  add_action('save_post', 'product_save_extras'); 
  
  function product_save_extras(){  
    global $post;  
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){ //if you remove this the sky will fall on your head.
      return $post_id;
    }else{
      update_post_meta($post->ID, "package", $_POST["package"]); 
      update_post_meta($post->ID, "img_id", $_POST["img_id"]); 
    } 
  }  

  add_filter("manage_edit-product_columns", "product_edit_columns");   

  function product_edit_columns($columns){
    $columns = array(
      "cb" => "<input type=\"checkbox\" />",
      "title" => "Product Name",
      "package" => "Package",
    );  
    return $columns;
  } 

  add_action("manage_products_posts_custom_column",  "products_custom_columns"); 

  function products_custom_columns($column){
    global $post;
    $custom = get_post_custom();
    switch ($column)
    {
      case "package":
        echo $custom["package"][0];
        break;
    }
  } 
?>