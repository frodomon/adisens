<section id="slideshow">
  <ul class="slides">
    <?php 
      $posts= query_posts(array(
        'post_type' => 'slides',
        'posts_per_page' => '3',
        'order'=>'ASC'));
      foreach ($posts as $post) :  setup_postdata($post); 
    ?>     
      <?php
        $post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
        $custom = get_post_custom($post->ID);
        $btn_txt = $custom["btn_txt"][0];
        $btn_link = $custom["btn_link"][0];
      ?>
    
      <li class="slide" style="background:url(<?php echo $post_thumbnail_url; ?>) no-repeat center center; background-size:cover;">
        <a href='<?php echo $btn_link ?>'>  
          <div class="slide-content">
            <p class='slide-title'><?php the_title(); ?></p>
            <p class='slide-description'><?php echo get_the_content($post); ?></p>
          </div>
        </a>
      </li>
      
    <?php endforeach;  
    wp_reset_postdata(); ?>
  </ul>
</section>
<hr>