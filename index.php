<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('title')?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body>

	<header role="banner">
		<?php
			/*
				If it's the startpage, this is the
				main heading (h1), otherwise just give
				it a span
			*/
			if (is_front_page()) :?>
			<h1><a href="<?php bloginfo('url')?>"><?php bloginfo('title') ?></a></h1>
			<?php else :?>
			<span><a href="<?php bloginfo('url')?>"><?php bloginfo('title') ?></a></span>
			<?php endif; ?>
	</header>

	<nav role="navigation">
		<?php wp_nav_menu(array('container' => false, 'depth' => 1)); ?>
	</nav>

	<section id="main-content">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<article role="article">
					<?php
						/*
							If it's the startpage the article headings is
							h2, otherwise it's h1
						*/
						if (is_front_page()) :?>
						<h2 role="heading"><?php the_title(); ?></h2>
						<?php else :?>
						<h1 role="heading"><?php the_title(); ?></h1>
						<?php endif; ?>
						<?php the_content(); ?>
				</article>
			<?php include(dirname(__FILE__)."/_templates/startpage_slider.php"); ?>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php if (is_front_page()) :?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Startsidans RSS-box') ); ?>
		<?php endif; ?>
	</section>

	<?php get_footer(); ?>
</body>
</html>
