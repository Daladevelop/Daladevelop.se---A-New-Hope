<!DOCTYPE html>
<html>
<?php get_header(); ?>

	<nav role="navigation">
		<?php wp_nav_menu(array('container' => false, 'depth' => 1)); ?>
	</nav>

	<section id="frontpage-slider">
		<?php include(dirname(__FILE__)."/_templates/startpage_slider.php"); ?>
	</section>

	<?php get_footer(); ?>
</body>
</html>
