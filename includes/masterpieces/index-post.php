<?php 
	//POST THUMBNAIL
	function index_post_thumbnail(){
		if ( has_post_thumbnail()) { ?>
		  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	      <?php $post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
        <img src="<?php echo $post_thumbnail_url; ?>" /> 
		  </a>
    <?php }
	}

	function index_post_title(){ 
	?>
    <div class="index-post-title">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2><?php the_title(); ?></h2></a>
    </div>
	<?php }

	function dohko_post_content() {
  	global $post;
    if (is_singular() && $post->post_content !== '') {  
      $format = get_post_format($post);
      if ( strcmp($format,'chat') == 0) { 
        dohko_excerpt();
      ?>
        <div class="post-content format-chat">
      <?php }
      else {
      ?>
        <div class="post-content">
      <?php 
        dohko_excerpt();
      }
        the_content();
    ?>
      </div>
    <?php } 
    if (!is_singular()) { 
      dohko_excerpt();
    } 
	}

	function dohko_excerpt(){
 		global $post;
    if (is_singular()) {?>
      <div class='separator'></div>
    <?php }
  ?>	
  	<div class="index-post-excerpt group">
  		<?php the_excerpt(); ?>
    </div>
  <?php
  }
  function dohko_only_excerpt_text(){
  ?>
    <div class="index-post-excerpt group">
      <?php the_excerpt(); ?>
    </div>
  <?php }

  function dohko_read_more(){
  ?>
		<div class="read_more-button group">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="read_more">
        <p class='readmore'>Leer Más</p>
      </a>
		</div>
  	
  <?php }

  function dohko_meta_index(){
  ?>
    <div class='meta-tags group'>
      <?php 
        the_category(); 
        the_tags('<ul class="post-tags"><li>','</li><li>','</li></ul>'); 
      ?>
    </div>
    <div class="line">
      <div class="meta-separator group"></div>
    </div>
    <div class="bottom">
      <div class="author alignleft">
        <p class='meta-post-index'>Por <?php the_author_posts_link(); ?></p>
      </div>
      <div class="date alignright">
        <?php
          $year = get_the_time( 'Y' );
          $month = get_the_time( 'm' );
        ?>
        <p class='meta-post-index'><a href="<?php echo get_month_link( $year, $month ); ?>"><?php the_time('d F Y'); ?></a></p>
      </div>
    </div>
  <?php }
?>
