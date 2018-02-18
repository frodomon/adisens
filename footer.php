		<hr class="separator-footer">
		<footer>
			<div class="footer-logo">
				<img id="footer-logo" src="<?php echo get_template_directory_uri().'/images/logo_adisens_inv.png'; ?>">
			</div>
			<div class='footer-bottom'>
				<div class='footer-bottom-left'>
					<p class='footer-bot'>Copyright &copy; <?=date('Y');?> <?php bloginfo('name'); ?>. Todos los derechos reservados</p>
				</div>
				<div class='footer-bottom-right'>
					<p class='footer-bot'>Desarrollado por Alfredo Vásquez</p>
				</div>		
			</div>	
		</footer>
			<!-- End Footer Information -->
			<?php wp_footer(); ?>  
			<?php print get_option('dohko_analytics'); ?>
	</div>
</body>
</html>