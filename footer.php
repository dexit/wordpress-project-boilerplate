	<footer class="mt-5"> 
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">

			<div class="container">
				<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#footer-menu-collapse" aria-controls="footer-menu-collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span> Menu
				</button>
				<?php wp_nav_menu(array(
					'menu'              => 'footer_menu',
					'theme_location'    => 'footer_menu',
					'depth'             => 2,
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'footer-menu-collapse',
					'menu_class'        => 'navbar-nav mx-auto text-center',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker()));
					?>
				</div>
			</nav>
			<p class="text-center pt-3 pb-3"><small>&copy; <?php echo Date('Y') ?> &mdash; <?php echo bloginfo('name'); ?></small></p>
		</footer>
		<?php wp_footer(); ?>
		<?php require_once('includes/structured-data.php'); ?>
	</body>
</html>
