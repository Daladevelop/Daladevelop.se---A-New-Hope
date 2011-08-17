<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('title')?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
</head>
<body>

	<header role="banner">
		<?php
			/*
				If it's the startpage, this is the
				main heading (h1), otherwise just give
				it a span
			*/
			if (is_home()) :?>
			<h1><a href="<?php bloginfo('url')?>"><?php bloginfo('title') ?></a></h1>
			<?php else :?>
			<span><a href="<?php bloginfo('url')?>"><?php bloginfo('title') ?></a></span>
			<?php endif; ?>
	</header>

	<nav role="navigation">
		<?php wp_nav_menu(array('container' => false)); ?>
	</nav>

	<section>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<article role="article">
					<?php
						/*
							If it's the startpage the article headings is
							h2, otherwise it's h1
						*/
						if (is_home()) :?>
						<h2 role="heading"><?php the_title(); ?></h2>
						<?php else :?>
						<h1 role="heading"><?php the_title(); ?></h1>
						<?php endif; ?>
						<?php the_content(); ?>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>

	<footer>
		<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</footer>

</body>
</html>