<?php //Template Name: About Us Page
get_header();  ?>
<section id="about_us">
	<div class="about-top">
		<h1 class="page-title">NOSOTROS</h1>
			<?php
				$about_p1 = get_option('dohko_about_p1');
				$about_p2 = get_option('dohko_about_p2');
				$about_p3 = get_option('dohko_about_p3');
				$about_p4 = get_option('dohko_about_p4');
				$mission = get_option('dohko_mission');
				$vision = get_option('dohko_vision');
				$mobile = get_option('dohko_mobile');
				$email = get_option('dohko_email');
				$address_line_1 = get_option('dohko_address_line_1');
				$address_line_2 = get_option('dohko_address_line_2');
				$address_line_3 = get_option('dohko_address_line_3');
			?>
			<?php if($about_p1): ?><p class='about_us_p'><?php print $about_p1; ?></p><?php endif; ?>
			<?php if($about_p2): ?><p class='about_us_p'><?php print $about_p2; ?></p><?php endif; ?>
			<?php if($about_p3): ?><p class='about_us_p'><?php print $about_p3; ?></p><?php endif; ?>
			<?php if($about_p4): ?><p class='about_us_p'><?php print $about_p4; ?></p><?php endif; ?>
	</div>
	<div class="about-middle group">
		<div class="mission">
			<h2 class="page-title">MISIÓN</h2>
			<?php if($mission): ?><p class='about_us_p'><?php print $mission; ?></p><?php endif; ?>
		</div>
		<div class="vision">
			<h2 class="page-title">VISIÓN</h2>
			<?php if($vision): ?><p class='about_us_p'><?php print $vision; ?></p><?php endif; ?>
		</div>
	</div>
	<div class="about-bottom group hide-responsive">
		<div class="about-contact">
			<h2 class="page-title">CONTACTO</h2>
			<?php if($mobile): ?><p class='about_us_p'><a class='about_us_p' href="tel:<?php print $mobile; ?>"><?php print $mobile; ?></a></p><?php endif; ?>
			<?php if($email): ?><p class='about_us_p'><a  class='about_us_p' href='<?php print $email; ?>'><?php print $email; ?></a></p><?php endif; ?>
			<?php if($address_line_1): ?><p class='about_us_p about_address'><?php print $address_line_1; ?></p><?php endif; ?>
			<?php if($address_line_2): ?><p class='about_us_p about_address'><?php print $address_line_2; ?></p><?php endif; ?>
			<?php if($address_line_3): ?><p class='about_us_p about_address'><?php print $address_line_3; ?></p><?php endif; ?>
		</div>
		<div class="about-image">
		</div>
	</div>
</section>
<?php get_footer(); ?>