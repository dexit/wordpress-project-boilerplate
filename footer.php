	<footer class="container"> 
		<hr>
		<nav class="navbar navbar-expand-lg navbar-light p-0" role="navigation">

			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu-collapse" aria-controls="main-menu-collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span> Menu
				</button>
				<?php wp_nav_menu(array(
					'menu'              => 'header_menu',
					'theme_location'    => 'header_menu',
					'depth'             => 2,
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'main-menu-collapse',
					'menu_class'        => 'navbar-nav mx-auto',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker()));
					?>
				</div>
			</nav>
			<hr>
			<p class="text-center"><small>&copy; <?php echo Date('Y') ?> &mdash; <?php echo bloginfo('name'); ?></small></p>
		</footer>
		<?php wp_footer(); ?>
		<script src="<?php bloginfo('template_url'); ?>/public/js/scripts.min.js"></script>
	</body>
</html>
