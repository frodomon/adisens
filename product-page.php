<?php //Template Name: Product Page
	get_header();  
?>
<?php $especie = get_the_title(); ?>
<section id="products">
	<div class="animal-products">
		<div class="products-top">
			<h1 class="page-title">PRODUCTOS</h1>
		</div>
		<div class="products-list">
				<?php 
	      	$posts= query_posts(array(
	        	'post_type' => 'products',
	        	'order'=>'ASC',
	        	'tax_query' => array(
	        		array(
	        			'taxonomy' => 'especie',
	        			'field' => 'slug',
	        			'terms' => $especie
	        		))
	        ));
	      	foreach ($posts as $post) :  setup_postdata($post); 
	    	?>
	      
	      <?php 
	      	$post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
	      	$custom = get_post_custom($post->ID);
	    		$package = $custom["package"][0];
	    		$img_id = $custom["img_id"][0]; 
			    // See if there's a media id already saved as post meta
			    $your_img_id = get_post_meta( $post->ID, '_your_img_id', true );
			    // Get the image src
			    $your_img_src = wp_get_attachment_url( $img_id );
			    // For convenience, see if the array is valid
			    $you_have_img = !empty($your_img_src);  
			    $custom_doc = wp_get_attachment_url( $img_id );
			    $filename = basename( get_attached_file($img_id))
	              

	      ?>

	      <div class="product-resume group">
	      	<div class="product-thumbnail">
	      		<div class="p-thumb">
							<img src="<?php echo $post_thumbnail_url; ?>" /> 
						</div> 
					</div>      		
	    		<div class="product-resume-description">
	    			<h3 class='product-title' style='color:black;'><?php the_title(); ?></h3>
	        	<p class='product-description'><?php echo get_the_content($post); ?></p>	
	        	<p class='product-description'><strong>Presentación: </strong><?php echo $package; ?></p>
	    		</div>
	      </div>
	    <?php endforeach;  
	    wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>