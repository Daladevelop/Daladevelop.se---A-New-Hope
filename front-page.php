<!DOCTYPE html>
<html>
<?php get_header(); ?>

	<nav role="navigation">
		<?php wp_nav_menu(array('container' => false, 'depth' => 1)); ?>
	</nav>

	<section id="main-content">
		<?php include(dirname(__FILE__)."/_templates/startpage_slider.php"); ?>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<article role="article">
					<h2 role="heading"><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</article>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php if (is_front_page()) :?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Startsidans RSS-box') ); ?>
		<?php endif; ?>
	</section>

	<?php get_footer(); ?>
</body>
</html>
