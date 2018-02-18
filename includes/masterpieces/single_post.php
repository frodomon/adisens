<?php
	function single_post_thumbnail(){
		if ( has_post_thumbnail()) { 
			$post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
      <img src="<?php echo $post_thumbnail_url; ?>" /> 
    <?php }
	}
//POST TITLE
	function dohko_post_title(){ 
	?>
		<div class="post-title">
    	<h2><?php the_title(); ?></h2>
    </div>
	<?php }
	function dohko_meta_top(){
  ?>
    <div class="single-meta-top">
      <p class='post-author'>Por <?php the_author_posts_link(); ?></p>
      <p class='post-date'><?php echo get_the_date('j F Y'); ?></p>
    </div>
    
  <?php }
	function dohko_meta_single(){
  ?>
    <div class="separator"></div>
    <div class='categories group'>
      <?php
      	the_category();
       	the_tags('<ul class="post-tags"><li>','</li><li>','</li></ul>'); 
      ?>
    </div>
  <?php }
  function dohko_social_share() { 
		global $post;
  ?>
	  <div class="separator"></div>
	  <div class='share_social'>
	  	<p class="negrita">Compartir:</p>
      <div class="social_share_links">
    		<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" class="share_links" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;">
     			<i class="fa fa-facebook-square fa-2x share_icons"></i>
    		</a>
    		<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php echo urlencode(get_the_title()); ?>" class="share_links" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;">
    			<i class="fa fa-twitter fa-2x share_icons"></i>
    		</a>
    		<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="share_links" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
          <i class="fa fa-google-plus-official  fa-2x share_icons"></i>
        </a>
      </div>    
    </div>
	<?php
    dohko_related_posts();
    echo do_shortcode('[fbcomments]'); 
  }

  function dohko_related_posts() { 
    $orig_post = $post;
    global $post;
    $tags = wp_get_post_tags($post->ID);
    if ($tags) {
      $tag_ids = array();
      foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
      $args=array(
        'tag__in' => $tag_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page'=>3,
        'post_type' => 'post',
        'post_status' => 'publish',
        'tax_query' => 
          array(  
            array(
              'taxonomy' => 'post_format',
              'field' => 'slug',
              'terms' => array('post-format-quote', 'post-format-status'),
              'operator' => 'NOT IN'
            )
          ),
        'caller_get_posts'=>1
      );

      $my_query = new wp_query( $args );
      if( $my_query->have_posts() ) {
        echo '<h3 class="fbc-title">Podría Interesarte:</h3><div id="related_posts" class="group">';
        while( $my_query->have_posts() ) {
          $my_query->the_post(); ?>

          <div class="related_post">
            <?php
              if ( get_post_format() ) {
                get_template_part( 'includes/recent_posts_widget/layout', get_post_format() );
              }
              else { ?>
                <div class='related_thumbnail'>
                  <?php if ( has_post_thumbnail()) { ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                      <?php $post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
                      <img src="<?php echo $post_thumbnail_url; ?>" /> 
                    </a>
                  <?php } ?>
                </div>
              <?php } ?>
              <h4 class='rp_title'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </div>
        <?php }
        echo '</div>';
      }
    }
    $post = $orig_post;
    wp_reset_query(); 
  }
?>