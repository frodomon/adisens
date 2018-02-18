<div class="flex-wrapper">
  <div id="slider" class="flexslider">
    <ul class="slides">
      <?php 
        if ( get_post_gallery() ) :
          $gallery = get_post_gallery( get_the_ID(), false );
          /* Loop through all the image and output them one by one */
          foreach( $gallery['src'] as $src ) : ?>
            <li>
              <img src="<?php echo $src; ?>" />
            </li>
      <?php 
          endforeach; 
        endif;
      ?>
    </ul>
  </div>
</div>

