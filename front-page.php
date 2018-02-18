<?php 
  get_header();
  get_template_part( 'home', 'slider' );
  get_template_part( 'home', 'represent' ); 
  get_template_part( 'home', 'species' );
  get_template_part( 'home', 'blog' ); 
  get_template_part( 'home', 'contact' ); 
?>
<?php get_footer(); ?>
<script type="text/javascript">
  $(window).ready(function(){
    $('#slideshow').flexslider({
      animation: "fade",
      animationLoop: true,
      slideshow: true,
      slideshowSpeed: 7000,
      randomize:false,
      prevText:"",
      nextText:""
    });
  });
</script>