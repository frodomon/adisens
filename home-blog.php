<section id="news" class="group">
  <h2 class="section-title">NOTICIAS</h2>
  <hr class="separator-title">
  <div id="news-posts" class="group">
    <?php 
      $posts= get_posts('posts_per_page=3');
      foreach ($posts as $post) :  setup_postdata($post); 
    ?>      
      <div class="news-post group">
        <div class="thumbnail">
          <?php
            index_post_thumbnail(); 
          ?>
        </div>
        <div class='news-post-content group'>
          <h3 class="news-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p class="news-post-excerpt"><?php print get_the_excerpt($post); ?></p>
        </div>
      </div>
    <?php 
      endforeach;
      wp_reset_postdata(); 
    ?>
  </div>
</section>
<hr>