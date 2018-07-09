<section id="represent">
  <div class="represent-top group">
    <div class="content-represent">
      <h2 class="section-title">A QUIENES REPRESENTAMOS</h2>
      <div>
        <hr class="separator-title">
      </div>
      <div class="represent-description">
        <?php $represent = get_option('dohko_represent');
          if($represent): ?><p class='home-text'><?php print $represent; ?></p>
        <?php endif; ?>
      </div>
    </div>
    <div class="profile">
      <div class="profilepic">
        <img src="<?php print IMAGES.'/marcela.png' ?>"/>
      </div>
    </div>
  </div>
  <div class="represent-bottom">
    <div class="suppliers group">
      <?php 
        $posts= query_posts(array(
          'post_type' => 'suppliers',
          'order'=>'ASC'));
        foreach ($posts as $post) :  setup_postdata($post); 
      ?>      
        <div class="supplier">
          <?php 
            $post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $custom = get_post_custom($post->ID);
            $website = $custom["website"][0];
          ?>            
          <a href="<?php echo $website; ?>" title="<?php the_title(); ?>">
            <?php $post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
            <img src=" <?php echo $post_thumbnail_url; ?>">
          </a>
        </div>
      <?php endforeach;
      wp_reset_postdata(); ?>
    </div>
</section>
<hr>