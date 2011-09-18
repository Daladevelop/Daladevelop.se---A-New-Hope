<!DOCTYPE html>
<html>
<?php get_header(); ?>

	<nav role="navigation">
		<?php wp_nav_menu(array('container' => false, 'depth' => 1)); ?>
	</nav>

	<section id="main-content">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<article role="article">
						<?php if(has_post_thumbnail()): ?>
							<img src="<?php get_post_thumbnail('small'); ?> class="thumb" alt="<?php the_title(); ?>"/>
						<?php endif; ?>
						<h1 role="heading"><?php the_title(); ?></h1>
						<?php the_content(); ?>
						
				</article>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>

	<?php get_footer(); ?>
</body>
</html>
